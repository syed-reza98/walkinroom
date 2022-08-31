<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <div class="flex items-center justify-center mt-4">
            <x-label for="email" :value="__('Are you going to list your Hotel? Then')" />
        </div>

        <div class="flex items-center justify-center mt-4">
            <x-button>
                <a href="{{ route('hotelowner_register') }}">
                    {{ __('Register as a Hotel Owner') }}
                </a>
            </x-button>
        </div>


        <div class="flex items-center justify-center mt-4">
            <x-label for="email" :value="__('OR want to list Apartment')" />
        </div>

        <div class="flex items-center justify-center mt-4">
            <x-button>
                <a href="{{ route('hotelowner_register') }}">
                    {{ __('Register as a Appartment Owner') }}
                </a>
            </x-button>
        </div>

    </x-auth-card>
</x-guest-layout>
