<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use App\MaintenanceEvent as Maint;

class MaintController extends Controller
{
    public function getMaintenance($car_id) {
        $car = Car::find($car_id);
        return view('user.maintenance.home', ['car' => $car]);
    }

    public function getMaintenanceAdd($car_id) {
        return view('user.maintenance.add');
        
    }

    public function postMaintenanceAdd() {
        
    }

    public function getMaintenanceEdit() {
        
    }

    public function postMaintenanceEdit() {
        
    }

    public function getMaintenanceDelete() {
        
    }
}
