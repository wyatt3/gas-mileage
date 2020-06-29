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
        $car = Car::find($car_id);
        return $this->checkIfUserOwnsCar($car, true) ?? view('user.gas.home');
    }

    public function getGasAdd() {
        return view('');
    }

    public function postGasAdd(Request $request) {

    }

    public function getGasEdit() {
        return "Get Gas Edit";
    }

    public function postGasEdit() {
        return "Post Gas Edit";
    }

    public function getGasDelete() {
        return "Post Gas Delete";

    }
}
