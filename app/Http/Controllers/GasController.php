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
            $averages['avgMiles'] /= $count;
            $averages['avgMileage'] /= $count;
            $averages['avgCostPerGallon'] /= $count;
            $averages['avgTotal'] /= $count;
        return view('user.gas.home', ['car' => $car, 'averages' => $averages]);
    }

    public function getGasAdd($car_id) {
        return view('user.gas.add', ['car_id' => $car_id]);
    }

    public function postGasAdd(Request $request) {
        $car = Car::find($request['car_id']);
        $event = new Gas();

        $car->gasevents()->save($event);
        return redirect(route('gas', ['car_id' => $car->id]))->with(['message' => 'Fill successfully recorded!', 'bg' => 'success']);
    }

    public function getGasEdit($event_id) {
        return "Get Gas Edit";
    }

    public function postGasEdit() {
        return "Post Gas Edit";
    }

    public function getGasDelete() {
        return "Post Gas Delete";

    }
}
