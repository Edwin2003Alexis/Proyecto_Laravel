<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <div>
            <h2 class="text-2xl font-bold text-green-700">Editar Producto</h2>
            <form method="POST" action="{{ route('vendedor.products.update', $product) }}" class="mt-4">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <x-label for="name" value="{{ __('Nombre') }}" class="text-green-700" />
                    <x-input id="name" type="text" name="name" value="{{ $product->name }}" class="block mt-1 w-full border-green-500 focus:ring-green-500 focus:border-green-500" required />
                </div>

                <div class="mb-4">
                    <x-label for="description" value="{{ __('Descripción') }}" class="text-green-700" />
                    <textarea id="description" name="description" class="block mt-1 w-full border-green-500 focus:ring-green-500 focus:border-green-500">{{ $product->description }}</textarea>
                </div>

                <div class="mb-4">
                    <x-label for="price" value="{{ __('Precio') }}" class="text-green-700" />
                    <x-input id="price" type="number" name="price" value="{{ intval($product->price) }}" class="block mt-1 w-full border-green-500 focus:ring-green-500 focus:border-green-500" required />
                </div>

                <x-button class="mt-4 bg-green-600 hover:bg-green-700 focus:ring-green-500">
                    {{ __('Actualizar Producto') }}
                </x-button>
            </form>
        </div>
    </x-authentication-card>
</x-guest-layout>
