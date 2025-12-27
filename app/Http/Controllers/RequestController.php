<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestController extends Controller
{
     //show all requests 
    public function index()
    {

        return view('requests.index');
    }

    public function show() {}
    public function edit() {}
    public function update() {}
    public function destroy() {}
}
