<!-- resources/views/comprador/dashboard.blade.php -->
<x-app-layout>
    <div class="container mx-auto mt-12 p-8 bg-white rounded-lg shadow-lg" style="background-color: #fff">
        <h1 class="text-4xl font-bold text-center text-gray-800" style="color: #198754">Comprador</h1>
        <p class="mt-2 text-center text-gray-600 text-lg">Bienvenid@, {{ Auth::user()->name }}.</p>

        <!-- Resumen del Carrito -->
        <div class="mt-8 p-4 border rounded-lg bg-green-100">
            <h2 class="text-2xl font-semibold text-gray-800">Resumen del Carrito</h2>
            <p class="mt-2">Tienes <strong>{{ session('cart') ? count(session('cart')) : 0 }}</strong> productos en tu carrito.</p>
            <a href="{{ route('comprador.cart.index') }}" class="mt-4 inline-block px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-500 transition duration-200">
                Ver Carrito
            </a>
        </div>

        <!-- Botón para ver productos -->
        <div class="mt-8 text-center">
            <a href="{{ route('comprador.index') }}" class="px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-500 transition duration-200">
                Ver Productos Disponibles
            </a>
        </div>

        <!-- Otros contenidos del dashboard -->
    </div>
</x-app-layout>
