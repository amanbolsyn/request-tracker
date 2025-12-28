<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Attributes\Ticket;

Route::get('/', function(){
    return redirect('/tickets');
});

Route::get('/tickets', [TicketController::class, 'index']);
Route::get('/ticket/create', [TicketController::class, 'create']);
Route::post('/ticket', [TicketController::class, 'store']);
Route::get('/tickets/{ticket}', [TicketController::class, 'show']);

Route::get('/login', [SessionController::class, 'create']);
Route::post('/login', [SessionController::class, 'store']);

Route::get('/register', [RegisterController::class, 'create']);
