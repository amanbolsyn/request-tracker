<?php

use App\Models\Ticket;

$categories = Ticket::CATEGORIES;
$prioraties = Ticket::PRIORATY_LEVELS;
?>

<x-layout>
    <x-slot:title>
        Create Ticket
    </x-slot:title>
    <div class="flex justify-center items-center h-[97%]">
        <form method="POST" action="/ticket" class="border-1 p-7 pt-5 pb-5 rounded-xl w-[35%]">
            @csrf
            <h1 class="flex text-3xl mb-3 justify-center">Create Ticket</h1>
            <div class="p-2">
                <x-label>Category</x-label>
                <x-select name="category" :options="$categories" class="w-full" :selected="old('category')">Category</x-select>
            </div>
            <div class="p-2">
                <x-label>Title</x-label>
                <x-input name="title" class="w-full" :value="old('title')">Title</x-input>
            </div class="p-2">
            <div class="p-2">
                <x-label>Description</x-label>
                <x-textarea name="body" class="w-full" :value="old('body')">Description</x-textarea>
            </div>
            <div class="p-2" > 
                <x-label>Prioraty</x-label>
                <x-select name="prioraty" :options="$prioraties" class="w-full" :selected="old('prioraty')">Prioraty</x-select>
            </div>
            <div class="flex justify-center">
                <x-formbutton class="m-2">Create</x-formbutton>
            </div>
        </form>
    </div>
</x-layout>