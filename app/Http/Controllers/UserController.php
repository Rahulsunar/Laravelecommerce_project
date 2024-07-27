<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function verifyUser(Request $request){
        $data = $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);

        if(Auth::attempt($data)){
            
            return redirect()->route('admin.dashboard');
        }
        else{
            return redirect()->route('login')->withErrors(['email'=>'Credentials do not match.']);
        }
    }
    function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
