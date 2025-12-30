<?php

use App\Models\Ticket;

$status = Ticket::STATUS_LEVELS;
?>

<x-layout>
    <x-slot:title>
        Ticket
    </x-slot:title>
    <h1 class="flex justify-center text-3xl m-10 mt-15">Ticket</h1>
    <div class="flex justify-center m-5">
        <div class="inline-block border-1 rounded-xl w-[40%] p-5 ">
            <div class="flex mb-2">
                <div class="flex flex-1">
                    <p class="p-[0.3rem] pb-[0.1rem] pt-[0.1rem] rounded-md {{PrioratyColor($ticket['prioraty'])}}"><b>{{$ticket['prioraty']}}</b></p>
                </div class="flex flex-1 justify-end">

                <div>
                    @can('user', Auth::user())
                    <p class="p-[0.3rem] pb-[0.1rem] pt-[0.1rem] rounded-md {{StatusColor($ticket['status'])}}">{{$ticket['status']}}</p>
                    @endcan

                    @can('admin', Auth::user())
                    <form method="POST" action="/ticket/{{$ticket->id}}"> 
                        @csrf
                        @method('PATCH')
                        <x-select onchange="this.form.submit()" name="status" :options="$status" class="w-full border-none   {{StatusColor($ticket['status'])}}" :selected="$ticket['status']">Category</x-select>
                    </form>
                    @endcan

                </div>


            </div>
            <h2><b>{{$ticket['category']}}: {{$ticket['title']}}</b></h2><br>
            <p>{{$ticket['body']}}</p>

            @can('user', Auth::user())
            <div class="flex justify-between mt-2">
                <form method="GET" action="/ticket/{{$ticket->id}}/edit">
                    <x-formButton>Edit</x-formButton>
                </form>
                <form method="POST" action="/ticket/{{$ticket->id}}">
                    @csrf
                    @method('DELETE')
                    <x-formButton>Delete</x-formButton>
                </form>
            </div>
            @endcan

        </div>
    </div>
</x-layout>