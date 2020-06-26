<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Auth;
Use App\Car;

class CarController extends Controller
{
    public function getCar() {
        
    }

    public function getCarAdd() {
        
    }

    public function postCarAdd(Request $request) {
        $car = new Car();
        $car->mileage = $request['mileage'];
        $car->make = $request['make'];
        $car->model = $request['model'];
        $car->year = $request['year'];
        $car->photo_name = $request['photo_name'];
        $car->save();
    }

    public function getCarEdit() {
        
    }

    public function postCarEdit(Request $request) {
        $car = Car::find($request['id']);
        $car->mileage = $request['mileage'];
        $car->make = $request['make'];
        $car->model = $request['model'];
        $car->year = $request['year'];
        $car->photo_name = $request['photo_name'];
        $car->save();
    }

    public function getCarDelete(Request $request) {
        $car = Car::find($request['id']);
        $car->user()->dissociate();
        $car->gasevents()->delete();
        $car->maintenanceevents()->delete();
        $car->delete();
        return redirect(route('home'))->with('message', 'Car deleted.');
    }
}
