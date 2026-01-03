<?php

namespace App\Http\Controllers;

use App\Models\Ticket as Ticket;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class TicketController extends Controller
{
    //show all Tickets 
    public function index()
    {
        //validate user
        $user = Auth::user();
        $query =  Ticket::query()->with('user');

        $filters = request()->validate([
            'category' => [Rule::in(Ticket::CATEGORIES)],
            'status' => [Rule::in(Ticket::STATUS_LEVELS)],
            'prioraty' => [Rule::in(Ticket::PRIORATY_LEVELS)],
        ]);

        //apply user restrictions
        if ($user->role !== 'admin') {
            $query->where('user_id', Auth::id());
        }

        // apply filters
        if (!empty($filters['category'])) {
            $query->where('category', $filters['category']);
        }

        if (!empty($filters['status'])) {
            $query->where('status', $filters['status']);
        }

        if (!empty($filters['prioraty'])) {
            $query->where('prioraty', $filters['prioraty']);
        }

        //querying the db 
        $tickets = $query->latest()->simplePaginate(10)->withQueryString();

        //load a view
        return view('Tickets.index', ['tickets' => $tickets, 'filters' => $filters]);
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
        $validAttr['user_id'] = Auth::id();

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
    public function update(Ticket $ticket)
    {

        if (Gate::allows('user', Auth::user())) {
            //validate data
            $validAttr = request()->validate([
                'category' => ['required', Rule::in(Ticket::CATEGORIES)],
                'title' => ['required', 'min:5'],
                'body' => ['required', 'min:30', 'max:100'],
                'prioraty' => ['required', Rule::in(Ticket::PRIORATY_LEVELS)]
            ]);
        }


        if (Gate::allows('admin', Auth::user())) {
            //validate data
            $validAttr = request()->validate([
                'status' => ['required', Rule::in(Ticket::STATUS_LEVELS)],
            ]);
        }

        //update data in db
        $ticket->update($validAttr);

        //redirect
        return redirect('/ticket/' . $ticket->id);
    }

    //user cannot delete created ticket
    public function destroy(Ticket $ticket)
    {

        //delete ticker from db
        $ticket->delete();

        //redirect
        return redirect("/tickets");
    }
}
