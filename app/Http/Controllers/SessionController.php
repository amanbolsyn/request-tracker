<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
     //

    public function create(){
        return view("sessions.create");
    }

    public function store(){

        //validate 
        $validAttr = request()->validate([
            'email'=> ['required', 'email'],
            'password' => ['required'],
        ]);

        //attempt to log in 
        if(! Auth::attempt($validAttr)){
            throw ValidationException::withMessages([
                'email' => 'Sorry, those credentials do not match',
                'password' => 'Sorry, those credentials do not match',
            ]);
        };

        //reginerate the session token
        request()->session()->regenerateToken();

        //redirect 
        return redirect('/tickets');

    }

    public function destroy(){

        //log the user out
        Auth::logout();

        return redirect('/login');
    }

}
