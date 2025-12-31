<?php

use App\Models\Ticket;

$categories = Ticket::CATEGORIES;
$prioraties = Ticket::PRIORATY_LEVELS;
?>


<x-layout>
    <x-slot:title>
        Edit Ticket
    </x-slot:title>
    <div class="flex justify-center items-center  h-[90vh]">
      @can('user', Auth::user())
        <form method="POST" action="/ticket/{{$ticket->id}}" class="border-1 p-7 pt-5 pb-5 rounded-xl w-[35%]">
            @csrf
            @method('PATCH')
            <h1 class="flex text-3xl mb-3 justify-center">Edit Ticket</h1>
            <div class = "p-2">
                <label for="category">Category</label>
                <x-select name="category" :options="$categories" class="w-full" selected="{{$ticket['category']}}">Category</x-select>
            </div>
            <div class = "p-2">
                <label for="title">Title</label>
                <x-input name="title" class="w-full" value="{{$ticket['title']}}">Title</x-input>
            </div>
            <div class = "p-2">
                <label for="body">Description</label>
                <x-textarea name="body" class="w-full" value="{{$ticket['body']}}">Description</x-textarea>
            </div>
            <div class = "p-2">
                <label for="prioraty">Prioraty</label>
                <x-select name="prioraty" :options="$prioraties" class="w-full" selected="{{$ticket['prioraty']}}">Prioraty</x-select>
            </div>
            <div class="flex justify-center">
                <x-formbutton class="m-2">Save</x-formbutton>
            </div>
        </form>
      @endcan
    </div>
</x-layout>