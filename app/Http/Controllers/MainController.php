<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Car;

class MainController extends Controller
{
    //public home page

    public function getIndex() {
        if(!Auth::user()) {
            return view('other.home');
        }
        else {
            $user = Auth::user();
            $cars = Car::where('user_id', $user->id)->paginate(5);
            return view('user.home', ['cars' => $cars, 'user' => $user]);
        }
    }

    public function getAbout() {
        return view('other.about');
    }
}
