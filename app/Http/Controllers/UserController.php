<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{
    public function getUserInfo() {
        $user = Auth::user();
        return view('user.info', ['user' => $user]);
    }

    public function getUserEdit($method) {
        $user = Auth::user();
        return view('user.edit', ['user' => $user, 'method' => $method]);
    }

    public function postUserEdit(Request $request, $method) {
        $user = Auth::user();
        if($method == 'name') {
            $this->validate($request, [
                'name' => 'required|min:5', 
            ]);
            $user->name = $request['name'];
            $user->save();
            return redirect(route('user'))->with(['message' => 'Name successfully updated', 'bg' => 'success']);
        } else if($method == 'password') {
            $this->validate($request, [
                'oldPassword' => 'required',
                'newPassword' => 'required|min:8',
                'confirmNewPassword' => 'required|min:8|same:newPassword',

            ]);
            if(password_verify($request['oldPassword'], $user->password)) {
                $user->password = password_hash($request['newPassword'], PASSWORD_BCRYPT);
                $user->save();
                return redirect(route('user'))->with(['message' => 'Password successfully updated.', 'bg' => 'success']);
            } else {
                return redirect(route('user'))->with('message', 'Password update unsuccessful. Please try again.');
            }
        }    
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
