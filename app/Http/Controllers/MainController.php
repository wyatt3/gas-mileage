<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

class MainController extends Controller
{
    public function getIndex() {
        return view('other.home');
    }

    public function getAbout() {
        return view('other.about');
    }
}
