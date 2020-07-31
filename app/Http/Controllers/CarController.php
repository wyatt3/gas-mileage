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
        $valid = $request->validate([
            'year' => 'required',
            'make' => 'required',
            'model' => 'required',
            'mileage' => 'required',
        ]);
        $car = new Car();
        if($request->photo) {
            $request->photo->storeAs('public/app/carImages', $request->photo->getClientOriginalName());
            $car->photo_name = $request->photo->getClientOriginalName();
        }
        if(!$car->photo_name) {
            $car->photo_name = "defaultCar.jpg";
        }
        $car->user_id = Auth::user()->id;
        $car->mileage = $request['mileage'];
        $car->make = $request['make'];
        $car->model = $request['model'];
        $car->year = $request['year'];
        $car->save();
        return redirect()->route('home')->with(['message' => 'Car successfully added', 'bg' => 'success']);
    }

    public function getCarEdit($car_id) {
        $car = Car::find($car_id);
        return view('user.car.edit', ['car' => $car]);
    }

    public function postCarEdit(Request $request) {
        $valid = $request->validate([
            'year' => 'required',
            'make' => 'required',
            'model' => 'required',
            'mileage' => 'required',
        ]);
        $car = Car::find($request['car_id']);
        if($request->photo) {
            $request->photo->storeAs('public/app/carImages', $request->photo->getClientOriginalName());
            $car->photo_name = $request->photo->getClientOriginalName();
        }
        $car->mileage = $request['mileage'];
        $car->make = $request['make'];
        $car->model = $request['model'];
        $car->year = $request['year'];
        $car->save();
        return redirect()->route('car', ['car_id' => $car->id])->with(['message' => 'Car successfully updated', 'bg' => 'success']);
    }

    public function getCarDelete($car_id) {
        $car = Car::find($car_id);
        $car->user()->dissociate();
        $car->gasevents()->delete();
        $car->maintenanceevents()->delete();
        $car->delete();
        return redirect()->route('home')->with(['message' => 'Car deleted.', 'bg' => 'warning']);
    }
}
