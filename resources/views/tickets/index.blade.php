<?php

use App\Models\Ticket;

$categories =  Ticket::CATEGORIES;
$prioraties = Ticket::PRIORATY_LEVELS;
$status = Ticket::STATUS_LEVELS;
?>


<x-layout>
    <x-slot:title>
        Tickets
    </x-slot:title>

    <!-- filtering -->
    <div class="flex justify-center mt-10 ">
        <div class="flex-col border-1 rounded-xl w-[40%] p-4">
            <form class="flex justify-center" method="GET" action="/tickets">
                <x-select name="category" :options="$categories" class="m-2" onchange="this.form.submit()" selected="{{  $filters['category'] ?? ''}}">
                    Category
                </x-select>
                <x-select name="prioraty" :options="$prioraties" class="m-2" onchange="this.form.submit()" selected="{{  $filters['prioraty'] ?? ''}}">
                    Prioraty
                </x-select>
                <x-select name="status" :options="$status" class="m-2" onchange="this.form.submit()" selected="{{  $filters['status'] ?? ''}}">
                    Status
                </x-select>
            </form>
            <div class="flex justify-center">
                <x-navlink href="/tickets" class="text-xl">Reset</x-navlink>
            </div>
        </div>
    </div>

    <!-- page heading -->
    <h1 class="flex justify-center text-3xl m-10">Your Tickets</h1>

    <!-- ticket cards -->
    @foreach($tickets as $ticket)
    <div class="flex justify-center ">
        <a href="/ticket/{{$ticket['id']}}" class="mb-5 w-[40%]">
            <div class="inline-block border-1 rounded-xl p-5 hover:scale-[1.02] hover:cursor-pointer ">
                <div class="flex justify-between mb-2">
                    <div class="flex">
                        <p class="p-[0.4rem] pb-[0.1rem] pt-[0.1rem] mr-3 rounded-md {{StatusColor($ticket['status'])}}">{{$ticket['status']}}</p>
                        <p class="p-[0.4rem] pb-[0.1rem] pt-[0.1rem] rounded-md {{PrioratyColor($ticket['prioraty'])}}"><b>{{$ticket['prioraty']}}</b></p>
                    </div>

                    <div class="flex">
                        <p class="mr-3">{{$ticket->user->first_name}} {{$ticket->user->last_name}}</p>
                        <p ><i>{{date('d/m/y', strToTime($ticket['created_at']))}}</i></p>
                    </div>
                </div>
                <h2 class="mb-2"><b>{{$ticket['category']}}: {{$ticket['title']}}</b></h2>
                <p>{{$ticket['body']}}</p>
            </div>
        </a>
    </div>
    @endforeach

    <!-- pagination  -->
    <div class="mr-5 ml-5 mb-10">
        {{$tickets->links()}}
    </div>

</x-layout>