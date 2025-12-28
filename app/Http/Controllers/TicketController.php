<?php

namespace App\Http\Controllers;

use App\Models\Ticket as Ticket;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class TicketController extends Controller
{
    //show all Tickets 
    public function index()
    {
        //validate user

        //get validated user's tickets
        $tickets = Ticket::latest()->get();

        //load a view
        return view('Tickets.index', ['tickets' => $tickets]);
    }

    public function show(Ticket $ticket)
    {
        return view('tickets.show', ['ticket' => $ticket]);
    }

    public function create()
    {
        return view('tickets.create');
    }

    public function store()
    {
        //validate attributes
        $validAttr = request()->validate([
            'category' => ['required', Rule::in(Ticket::CATEGORIES)],
            'title' => ['required', 'min:5'],
            'body' => ['required', 'min:30', 'max:100'],
            'prioraty' => ['required', Rule::in(Ticket::PRIORATY_LEVELS)]
        ]);

        //remove after adding auth
        $validAttr['user_id'] = 3;

        //save into db
        Ticket::create($validAttr);

        //redirect 
        return redirect('/tickets');
    }

    //user cannot edit created ticket
    public function edit(Ticket $ticket)
    {
        return view('tickets.edit', ['ticket' => $ticket]);
    }

    //user cannot edit created ticket
    public function update(Ticket $ticket) {

        //validate data
        $validAttr = request()->validate([
            'category' => ['required', Rule::in(Ticket::CATEGORIES)],
            'title' => ['required', 'min:5'],
            'body' => ['required', 'min:30', 'max:100'],
            'prioraty' => ['required', Rule::in(Ticket::PRIORATY_LEVELS)]
        ]);

        //update data in db
        $ticket->update($validAttr);

        //redirect
        return redirect('/ticket/' . $ticket->id);
    }

    //user cannot delete created ticket
    public function destroy(Ticket $ticket) {

        //delete ticker from db
        $ticket->delete();

        //redirect
        return redirect("/tickets");
        
    }
}
