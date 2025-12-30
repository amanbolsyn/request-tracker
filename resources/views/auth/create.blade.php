<x-layout>
    <x-slot:title>
        Sign up
    </x-slot:title>
    <div class="flex justify-center items-center h-[97%]">
        <form method="POST" action="/register" class="border-1 p-7 pt-5 pb-5 w-min rounded-xl">
            @csrf
            <h1 class="flex text-3xl mb-3 justify-center">Sign up</h1>

            <div class="flex flex-row">
                <div class="p-2">
                    <x-label for="first_name">First Name</x-label><br>
                    <x-input name="first_name" :value="old('first_name')">First Name</x-input>
                </div>
                <div class="p-2">
                    <x-label for="last_name">Last Name</x-label><br>
                    <x-input name="last_name" :value="old('last_name')">Last Name</x-input>
                </div>
            </div>

            <div class="p-2">
                <x-label for="email">Email</x-label><br>
                <x-input name="email" class="w-full" :value="old('email')">Email</x-input>
            </div>

            <div class="flex flex-row">
                <div class="p-2">
                    <x-label for="password">Password</x-label><br>
                    <x-input name="password" type="password">Password</x-input>
                </div>
                <div class="p-2">
                    <x-label for="password-confirmation">Password Confirm</x-label><br>
                    <x-input name="password_confirmation" type="password">Confirm Password</x-input>
                </div>
            </div>
            <div class="flex justify-center p-2">
                <x-formbutton class="m-2">Sign up</x-formbutton>
            </div>
        </form>
    </div>
</x-layout>