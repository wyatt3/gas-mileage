<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\GasEvent as Gas;

class GasController extends Controller
{
    public function getGasMileage() {
        return "Get Gas Mileage";
    }

    public function getGasEdit() {
        return "Get Gas Edit";
    }

    public function postGasEdit() {
        return "Post Gas Edit";
    }

    public function postGasDelete() {
        return "Post Gas Delete";

    }
}
