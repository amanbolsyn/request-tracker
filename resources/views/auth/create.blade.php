<x-layout>
    <x-slot:title>
        Sign up
    </x-slot:title>
    <div class="flex justify-center items-center h-[97%]">
        <form method="POST" action="/register" class="border-1 p-7 pt-5 pb-5 rounded-xl">
            @csrf
            <h1 class="flex text-3xl mb-3 justify-center">Sign up</h1>
            <div class="flex flex-row">
                <x-input name="first_name" :value="old('first_name')">First Name</x-input>
                <x-input name="last_name" :value="old('last_name')">Last Name</x-input>
            </div>
            <div>
                 <x-input name="email" class="w-full" :value="old('email')" >Email</x-input>
            </div>
             <div class="flex flex-row">
                 <x-input name="password" type="password">Password</x-input>
                 <x-input name="password_confirmation" type="password">Confirm Password</x-input>
            </div>
            <div class="flex justify-center">
                <x-formbutton class="m-2">Sign up</x-formbutton>
            </div>
        </form>
    </div>
</x-layout>