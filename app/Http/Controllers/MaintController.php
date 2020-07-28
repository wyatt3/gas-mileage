<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use App\MaintenanceEvent as Maint;

class MaintController extends Controller
{
    public function getMaintenance($car_id) {
        $car = Car::where('id', $car_id)->with('maintenanceevents')->first();
        return view('user.maintenance.home', ['car' => $car]);
    }

    public function getMaintenanceAdd($car_id) {
        $car = Car::find($car_id);
        return view('user.maintenance.add', ['car' => $car]);
    }

    public function postMaintenanceAdd(Request $request) {
        $car = Car::find($request['car_id']);
        $event = new Maint([
            'date' => $request['date'],
            'mileage' => $request['mileage'],
            'cost' => $request['cost'],
            'description' => $request['description'],
        ]);
        $car->maintenanceevents()->save($event);
        return redirect()->route('maintenance', ['car_id' => $car->id])->with(['message' => 'Entry Successfully Added!', 'bg' => 'success']);
        
    }

    public function getMaintenanceEdit($car_id, $id) {
        $car = Car::find($car_id);
        $event = Maint::find($id);
        return view('user.maintenance.edit', ['car' => $car, 'event' => $event]);
        
    }

    public function postMaintenanceEdit(Request $request) {
        $car = Car::find($request['car_id']);
        $event = Maint::find($request['id']);
        $event->date = $request['date'];
        $event->mileage = $request['mileage'];
        $event->cost = $request['cost'];
        $event->description = $request['description'];
        $car->maintenanceevents()->save($event);
        return redirect()->route('maintenance', ['car_id' => $car->id])->with(['message' => 'Entry Successfully Edited!', 'bg' => 'success']);

    }

    public function getMaintenanceDelete($car_id, $id) {
        $maint = Maint::find($id);
        $maint->delete();
        return redirect()->route('maintenance', ['car_id' => $car_id])->with(['message' => 'Entry Successfully Deleted!', 'bg' => 'success']);
    }
}
