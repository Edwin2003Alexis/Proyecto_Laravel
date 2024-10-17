<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <div class="container mx-auto mt-4">
            <h2 class="text-2xl font-bold text-green-700">Agregar Producto</h2>
            <form method="POST" action="{{ route('vendedor.products.store') }}" class="mt-4">
                @csrf

                <div class="mb-4">
                    <x-label for="name" value="{{ __('Nombre') }}" class="text-green-700" />
                    <x-input id="name" type="text" name="name" class="block mt-1 w-full border-green-500 focus:ring-green-500 focus:border-green-500" required />
                </div>

                <div class="mb-4">
                    <x-label for="description" value="{{ __('Descripción') }}" class="text-green-700" />
                    <textarea id="description" name="description" class="block mt-1 w-full border-green-500 focus:ring-green-500 focus:border-green-500" required></textarea>
                </div>

                <div class="mb-4">
                    <x-label for="price" value="{{ __('Precio') }}" class="text-green-700" />
                    <x-input id="price" type="number" name="price" step="0.01" class="block mt-1 w-full border-green-500 focus:ring-green-500 focus:border-green-500" required />
                </div>

                <x-button class="mt-4 bg-green-600 hover:bg-green-700 focus:ring-green-500">
                    {{ __('Agregar Producto') }}
                </x-button>
            </form>

            <!-- Botón para volver al Dashboard -->
            <div class="mt-6">
                <a href="{{ route('vendedor.dashboard') }}" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">
                    Volver al Dashboard
                </a>
            </div>
        </div>
    </x-authentication-card>
</x-guest-layout>
