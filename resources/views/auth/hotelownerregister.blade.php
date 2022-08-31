<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('hotelowner_register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-label for="cell_phone" :value="__('Phone Number')" />

                <x-input id="cell_phone" class="block mt-1 w-full" type="text" name="cell_phone" :value="old('cell_phone')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="mt-4">
                <x-label for="hotel_name" :value="__('Hotel Name')" />

                <x-input id="hotel_name" class="block mt-1 w-full" type="text" name="hotel_name" :value="old('hotel_name')" required autofocus />
            </div>

            <div class="mt-4">
                <x-label for="address" :value="__('Hotel Address')" />

                <x-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required autofocus />
            </div>

            <div class="mt-4">
                <x-label for="location" :value="__('Location')" />

                {{-- <x-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required autofocus /> --}}

                <select id="location" name="location" autocomplete="location" class="block w-full py-3 px-4 mb-4 border border-2 border-transparent border-gray-200 bg-white rounded-md shadow-sm sm:text-sm">
                    <option>Select Location</option>
                  @foreach ($locations as $location)
                    <option value={{$location->id}}>{{$location->city}}</option>
                  @endforeach
                </select>
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
