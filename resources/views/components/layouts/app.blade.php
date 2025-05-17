<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title') | {{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">

        <!-- Icon Fonts -->
        <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet" />

        <!-- Slider -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
        <link rel="stylesheet" href="{{ asset('css/share-buttons.css') }}">
        <script src="{{ asset('js/share-buttons.js') }}"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
        <script src="{{ asset('js/share-buttons.jquery.js') }}"></script>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
        @stack('styles')
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-white">
            <x-navigation-menu />

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>

            <x-layouts.footer/>
        </div>
        <script src="https://www.google.com/recaptcha/api.js"></script>

        @stack('modals')
        @stack('scripts')
        @livewireScripts
    </body>
</html>
