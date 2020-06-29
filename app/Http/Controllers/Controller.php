<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function checkIfUserOwnsCar($car, $redirect=false) {
        $check = Auth::user()->id != $car->user_id;
        if($check) {
            if($redirect) {
                return redirect(route('home'));
            } else {
                return $check;
            }
        }
    }
}
