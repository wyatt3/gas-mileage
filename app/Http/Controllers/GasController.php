<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\GasEvent as Gas;
use Auth;
use App\Car;

class GasController extends Controller
{
    public function getGasMileage(Request $request) {
        $user = Auth::user();
        $car = Car::find($request['car_id']);
        return view('user.gas.home');
    }

    public function getGasEdit() {
        return "Get Gas Edit";
    }

    public function postGasEdit() {
        return "Post Gas Edit";
    }

    public function postGasDelete() {
        return "Post Gas Delete";

    }
}
