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
            return redirect(route('user.home'));
        }
    }

    public function getAbout() {
        return view('other.about');
    }

    public function getUserIndex() {
        return view('user.home');
    }
}
