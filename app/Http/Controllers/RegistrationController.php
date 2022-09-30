<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegistrationController extends Controller
{
    public function index(){
        return view('form');
    }

    public function register(Request $request){
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required',
                'password_confirm' => 'required|same:password',
            ]
        );
        echo "<pre>";
        print_r($request->all());

        $customer = new User;
        $customer->name = $request['name'];
        $customer->email = $request['email'];
        $customer->password = md5($request['password']);
        $customer->save();
    }


}
