<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\GasEvent as Gas;
use Auth;
use App\Car;

class GasController extends Controller
{

    public function checkIfUserOwnsCar($user, $car) {
        if($user->id != $car->user_id) {
            return redirect(route('home'));
        }
    }

    public function getGas(Request $request) {
        $user = Auth::user();
        $car = Car::find($request['car_id']);
        $output = $this->checkIfUserOwnsCar($user, $car);
        return $output ?? view('user.gas.home');
    }

    public function getGasAdd() {
        return view('gas.add');
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
