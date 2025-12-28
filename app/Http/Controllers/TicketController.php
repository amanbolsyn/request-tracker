<?php

namespace App\Http\Controllers;

use App\Models\Ticket as Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
     //show all Tickets 
    public function index()
    {
        //validate user

        //get validated user's tickets
        $tickets = Ticket::get();

        //load a view
        return view('Tickets.index', ['tickets' => $tickets]);
    }

    public function show(Ticket $ticket) {

        return view('tickets.show', ['ticket' => $ticket]);

    }

    public function create(){
        return view('tickets.create');
    }
    public function store(){}
    public function edit() {}
    public function update() {}
    public function destroy() {}
}
