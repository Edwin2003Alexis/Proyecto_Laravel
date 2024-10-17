<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>
<body class="font-sans antialiased bg-gray-50"> <!-- Cambié a un gris claro para complementar los verdes -->
    <x-banner />

    <div class="min-h-screen bg-green-100"> <!-- Fondo del contenedor principal en verde claro -->
        @livewire('navigation-menu')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <h1 class="text-green-600">{{ $header }}</h1> <!-- Título en verde -->
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }} <!-- Aquí es donde se espera el contenido del slot -->
        </main>
    </div>

    @stack('modals')

    @livewireScripts
</body>
</html>
