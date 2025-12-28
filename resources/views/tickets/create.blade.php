<?php
$categories = ['incident', 'service request', 'problem', 'change', 'request for information'];
$prioraties = ['low', 'medium', 'critical'];
?>

<x-layout>
    <x-slot:title>
        Create Ticket
    </x-slot:title>
    <div class="flex justify-center items-center h-[97%]">
        <form method="POST" action="/ticket" class="border-1 p-7 pt-5 pb-5 rounded-xl w-[35%]">
            @csrf
            <h1 class="flex text-3xl mb-3 justify-center">Create Ticket</h1>
            <div>
                <x-select name="category" :options="$categories" class="w-full">Category</x-select>
                @error('category')
                <p class="mt-1 text-red-500 text-sm">{{$message}}</p>
                @enderror
            </div>
            <div>
                <x-input name="title" class="w-full">Title</x-input>
            </div>
            <div>
                <x-textarea name="body" class="w-full">Description</x-textarea>
            </div>
            <div>
                <x-select name="prioraty" :options="$prioraties" class="w-full">Prioraty</x-select>
            </div>
            <div class="flex justify-center">
                <x-formbutton>Create</x-formbutton>
            </div>
        </form>
    </div>
</x-layout>