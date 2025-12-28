<x-layout>
    <x-slot:title>
        Log in
    </x-slot:title>
    <div class="flex justify-center items-center h-[97%]">
        <form method="POST" action="/login" class="border-1 inline-block p-10 pt-5 pb-5 rounded-xl items-center">
            @csrf
            <h1 class="flex justify-center text-2xl">Log in</h1>
            <x-input class="w-full" name="email" :value="old('email')">Email</x-input>
            <x-input  class="w-full" name="password" type="password" >Password</x-input>
            <div class = "flex justify-center">
                <x-formbutton class="m-2">Log in</x-formbutton>
            </div>
        </form>
    </div>
</x-layout>