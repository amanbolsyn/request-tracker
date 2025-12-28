<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
    //
    public function create()
    {
        return view('auth.create');
    }

    public function store(){

        //validate the data
        $validAttr = request()->validate([
           'first_name' => ['required', 'min:2'],
           'last_name' => ['required', 'min:2'],
            'email' => ['required','email', 'max:50'], 
            'password' => ['required', Password::min(5)->letters()->numbers(), 'confirmed'], 
        ]);

        //crate the user and store it in db
        $user = User::create($validAttr);

        //log the user in 
        Auth::login($user);

        //redirect the user
        return redirect('/tickets');
    }
}
