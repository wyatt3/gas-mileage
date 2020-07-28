<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use App\MaintenanceEvent as Maint;

class MaintController extends Controller
{
    public function getMaintenance($car_id) {
        $car = Car::find($car_id)->with('maintenanceevents')->first();
        return view('user.maintenance.home', ['car' => $car]);
    }

    public function getMaintenanceAdd($car_id) {
        return view('user.maintenance.add');
        
    }

    public function postMaintenanceAdd() {
        
    }

    public function getMaintenanceEdit($car_id, $id) {
        $car = Car::find($car_id);
        $event = Maint::find($id);
        return view('user.maintenance.edit', ['car_id' => $car_id, 'event' => $event]);
        
    }

    public function postMaintenanceEdit(Request $request, $car_id, $id) {
        
    }

    public function getMaintenanceDelete($car_id, $id) {
        $maint = Maint::find($id);
        $maint->delete();
        return redirect()->route('maintenance', ['car_id' => $car_id])->with(['message' => 'Entry Successfully Deleted', 'bg' => 'danger']);
    }
}
