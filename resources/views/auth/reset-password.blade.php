<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <div class="block">
                <x-label for="email" value="{{ __('Email') }}" class="text-green-600" />
                <x-input id="email" class="block mt-1 w-full border border-green-300 focus:border-green-500 focus:ring focus:ring-green-200" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" class="text-green-600" />
                <x-input id="password" class="block mt-1 w-full border border-green-300 focus:border-green-500 focus:ring focus:ring-green-200" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" class="text-green-600" />
                <x-input id="password_confirmation" class="block mt-1 w-full border border-green-300 focus:border-green-500 focus:ring focus:ring-green-200" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button class="bg-green-600 hover:bg-green-500 focus:bg-green-700 focus:ring-green-300">
                    {{ __('Reset Password') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
