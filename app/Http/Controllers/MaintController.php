<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\MaintenanceEvent as Maint;

class MaintController extends Controller
{
    public function getMaintenance($car_id) {
        return view('user.maintenance.home');
    }

    public function getMaintenanceAdd() {
        
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
