<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\TicketController;
use App\Models\Ticket;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return redirect('/tickets');
});

Route::get('/tickets', [TicketController::class, 'index'])
    ->middleware('auth');


Route::get('/ticket/create', [TicketController::class, 'create'])
    ->middleware('auth')
    ->can('create', Ticket::class);

Route::post('/ticket', [TicketController::class, 'store'])
    ->middleware('auth')
    ->can('create', Ticket::class);

Route::get('/ticket/{ticket}/edit', [TicketController::class, 'edit'])
    ->middleware('auth')
    ->can('update', 'ticket');

Route::patch('/ticket/{ticket}', [TicketController::class, 'update'])
    ->middleware('auth')
    ->can('update', 'ticket');

Route::delete('/ticket/{ticket}', [TicketController::class, 'destroy'])
    ->middleware('auth')
    ->can('delete', 'ticket');

Route::get('/ticket/{ticket}', [TicketController::class, 'show'])
    ->middleware('auth')
    ->can('view', 'ticket');

Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy'])->middleware('auth');

Route::get('/register', [RegisterController::class, 'create']);
Route::post('/register', [RegisterController::class, 'store']);
