<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function getIndex() {
        return "Get Admin Page";
    }

    public function getUser() {
        return "Get User Page";
    }

    public function postUserDelete(Request $request) {
        
    }

}
