<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\GasEvent as Gas;
use Auth;
use App\Car;

class GasController extends Controller
{
    public function getGas($car_id) {
        $user = Auth::user();
        $carCheck = Car::find($car_id);
        $car = Car::where('id', $car_id)->with('gasevents')->first();
        
        //Calculating averages
        $averages = [
            'avgMiles' => 0,
            'avgMileage' => 0,
            'avgCostPerGallon' => 0,
            'avgTotal' => 0,
        ];
        $count = 0;
        foreach($car->gasevents as $event) {
            $averages['avgMiles'] += $event->trip_miles;
            $averages['avgMileage'] += $event->gas_mileage;
            $averages['avgCostPerGallon'] += $event->price_per_gallon;
            $averages['avgTotal'] += $event->total;
            $count += 1;
        }
        if ($count != 0) {
            $averages['avgMiles'] /= $count;
            $averages['avgMileage'] /= $count;
            $averages['avgCostPerGallon'] /= $count;
            $averages['avgTotal'] /= $count;
        } else {
            $averages['avgMiles'] = 0;
            $averages['avgMileage'] = 0;
            $averages['avgCostPerGallon'] = 0;
            $averages['avgTotal'] = 0;
        }
        return view('user.gas.home', ['car' => $car, 'averages' => $averages]);
    }

    public function getGasAdd($car_id) {
        $car = Car::find($car_id);
        return view('user.gas.add', ['car' => $car]);
    }

    public function postGasAdd(Request $request) {
        $valid = $request->validate([
            'date' => 'required',
            'miles' => 'required',
            'trip_miles' => 'required',
            'gallons' => 'required',
            'total' => 'required',
        ]);
        $car = Car::find($request['car_id']);
        $event = new Gas([
            'date' => $request['date'],
            'mileage' => $request['miles'],
            'trip_miles' => $request['trip_miles'],
            'gallons' => $request['gallons'],
            'gas_mileage' => $request['trip_miles']/$request['gallons'],
            'price_per_gallon' => $request['total']/$request['gallons'],
            'total' => $request['total']
        ]);
        if($event->mileage > $car->mileage) {
            $car->mileage = $event->mileage;
            $car->save();
        }
        $car->gasevents()->save($event);
        return redirect(route('gas', ['car_id' => $car->id]))->with(['message' => 'Fill successfully recorded!', 'bg' => 'success']);
    }

    public function getGasEdit($car_id, $id) {
        $car = Car::find($car_id);
        $event = Gas::find($id);
        return view('user.gas.edit', ['car' => $car, 'event' => $event]);
    }

    public function postGasEdit(Request $request) {
        $valid = $request->validate([
            'date' => 'required',
            'miles' => 'required',
            'trip_miles' => 'required',
            'gallons' => 'required',
            'total' => 'required',
        ]);
        $car = Car::find($request['car_id']);
        $event = Gas::find($request['id']);
        $event->date = $request['date'];
        $event->mileage = $request['miles'];
        $event->trip_miles = $request['trip_miles'];
        $event->gallons = $request['gallons'];
        $event->gas_mileage = $request['trip_miles']/$request['gallons'];
        $event->price_per_gallon = $request['total']/$request['gallons'];
        $event->total = $request['total'];
        if($event->mileage > $car->mileage) {
            $car->mileage = $event->mileage;
            $car->save();
        }
        $car->gasevents()->save($event);
        return redirect()->route('gas', ['car_id' => $car->id])->with(['message' => 'Entry Successfully Updated!', 'bg' => 'success']);
    }

    public function getGasDelete($car_id, $id) {
        $event = Gas::find($id);
        $event->delete();
        return redirect()->route('gas', ['car_id' => $car_id])->with(['message' => 'Entry Successfully Deleted!', 'bg' => 'danger']);
    }
}
