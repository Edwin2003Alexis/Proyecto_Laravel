<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <div class="container">
            <h2 class="text-success" style="color: #198754">Registro</h2> <!-- Texto en verde -->
            <form method="POST" action="{{ route('register') }}" style="background-color: #d8f3dc; padding: 20px; border-radius: 8px;"> <!-- Fondo verde claro -->
                @csrf

                <div>
                    <x-label for="name" value="{{ __('Name') }}" />
                    <x-input id="name" class="block mt-1 w-full form-control border-success" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                </div>

                <div class="mt-4">
                    <x-label for="email" value="{{ __('Email') }}" />
                    <x-input id="email" class="block mt-1 w-full form-control border-success" type="email" name="email" :value="old('email')" required autocomplete="username" />
                </div>

                <div class="mt-4">
                    <x-label for="password" value="{{ __('Password') }}" />
                    <x-input id="password" class="block mt-1 w-full form-control border-success" type="password" name="password" required autocomplete="new-password" />
                </div>

                <div class="mt-4">
                    <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                    <x-input id="password_confirmation" class="block mt-1 w-full form-control border-success" type="password" name="password_confirmation" required autocomplete="new-password" />
                </div>

                <div class="mt-4">
                    <x-label for="role" value="{{ __('Role') }}" />
                    <select id="role" name="role" class="block mt-1 w-full form-select border-success" required>
                        <option value="" disabled selected>Selecciona un rol</option>
                        <option value="vendedor">Vendedor</option>
                        <option value="comprador">Comprador</option>
                    </select>
                </div>

                <x-button class="mt-4 btn btn-success" style="background-color: #198754; padding: 20px; border-radius: 8px;">
                    {{ __('Register') }}
                </x-button>
            </form>
        </div>
    </x-authentication-card>

    <style>
        /* Cambiar el color del borde en el estado de focus usando Bootstrap */
        .form-control:focus, .form-select:focus {
            border-color: #198754 !important; /* Verde para el borde */
            box-shadow: 0 0 0 0.25rem rgba(25, 135, 84, 0.5) !important; /* Sombra verde */
        }
    </style>
</x-guest-layout>
