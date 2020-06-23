<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\MaintenanceEvent as Maint;

class MaintController extends Controller
{
    public function getMaintenance() {
        return "Get Maintenance";
    }

    public function getMaintenanceEdit() {
        return "Get Maintenance Edit";
    }

    public function postMaintenanceEdit() {
        return "Post Maintenance Edit";
    }

    public function postMaintenanceDelete() {
        return "Post Maintenance Delete";
    }
}
