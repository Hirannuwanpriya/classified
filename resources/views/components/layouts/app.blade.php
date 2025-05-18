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
            <!-- Header -->
            <header class="bg-[#3056d3] text-white px-4 py-4">
                <div class="flex flex-wrap justify-between items-center gap-4">
                    <div class="flex items-center space-x-3">
                        <span class="text-2xl font-bold">
                            <a href="{{ route('home') }}">EVICIO Classified</a>
                        </span>
                    <x-navigation-menu />
                    </div>
                </div>
            </header>

            <!-- Search Bar -->
            <section class="bg-[#3056d3] py-6 px-4">
                <div class="max-w-xl mx-auto">
                    <div class="bg-white rounded-full flex items-center px-4 py-2 shadow">
                        <input
                                type="text"
                                placeholder="What are you looking for?"
                                class="flex-grow outline-none px-2 py-2 text-gray-700 rounded-l-full"
                        />
                        <button class="bg-violet-300 p-3 rounded-full">
                            <svg class="w-5 h-5 text-black" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0016 9.5 6.5 6.5 0 109.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l4.25 4.25c.41.41 1.09.41 1.5 0s.41-1.09 0-1.5L15.5 14zM10 14a4 4 0 110-8 4 4 0 010 8z"/></svg>
                        </button>
                    </div>
                </div>
            </section>

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
