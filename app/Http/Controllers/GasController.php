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

        foreach($car->gasevents as $gasEvent) {

        }
        return view('user.gas.home', ['car' => $car, ]);
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
