<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Auth;
Use App\Car;

class CarController extends Controller
{
    public function getCar($car_id) {
        $car = Car::find($car_id);
        return view('user.car.home', ['car' => $car]);
    }

    public function getCarAdd() {
        return view('user.car.add');
    }

    public function postCarAdd(Request $request) {
        $car = new Car();
        $car->user_id = Auth::user()->id;
        $car->mileage = $request['mileage'];
        $car->make = $request['make'];
        $car->model = $request['model'];
        $car->year = $request['year'];
        $car->photo_name = $request['photo_name'];
        $car->save();
        return redirect(route('home'))->with('message', 'Car Added!');
    }

    public function getCarEdit($car_id) {
        return view('user.car.edit', ['car_id' => $car_id]);
    }

    public function postCarEdit(Request $request, $car_id) {
        $car = Car::find($car_id);
        $car->mileage = $request['mileage'];
        $car->make = $request['make'];
        $car->model = $request['model'];
        $car->year = $request['year'];
        $car->photo_name = $request['photo_name'];
        $car->save();
    }

    public function getCarDelete($car_id) {
        $car = Car::find($car_id);
        $car->user()->dissociate();
        $car->gasevents()->delete();
        $car->maintenanceevents()->delete();
        $car->delete();
        return redirect(route('home'))->with(['message' => 'Car deleted.', 'bg' => 'warning']);
    }
}
