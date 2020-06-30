<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Session;

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
            ]); //Hi mom
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
}
