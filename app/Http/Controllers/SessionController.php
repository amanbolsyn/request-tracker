<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
     //

    public function create(){
        return view("sessions.create");
    }

    public function store(){
        dd(request()->all());
        //validate 
        //attempt to log in 
        //redirect 
    }
}
