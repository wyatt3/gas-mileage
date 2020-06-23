<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

class MainController extends Controller
{
    //public home page

    public function getIndex() {
        if(!Auth::user()) {
            return view('other.home');
        }
        else {
            return view('user.home');
        }
    }

    public function getAbout() {
        return view('other.about');
    }
}
