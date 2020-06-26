<?php

namespace App\Http\Controllers;
use Auth;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function getIndex() {
        return "Get Admin Page";
    }

    public function getUser() {
        return "Get User Page";
    }

    public function getUserDelete() {
        $user = Auth::user();
        $user->cars()->get()->each(function($car) {
            $car->gasevents()->delete();
            $car->maintenanceevents()->delete();
        });
        $user->cars()->delete();
        $user->delete();
        return redirect(route('home'))->with('message', 'Account successfully closed');
    }

}
