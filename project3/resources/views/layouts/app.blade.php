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
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-700">
            @include('layouts.navigation')

            <nav class="bg-gray-800 w-full">
                <div class="container mx-1 px-10">
                    <div class="flex items-center justify-between h-16">
                        <div class="flex items-center">
                            <a href="#" class="text-white text-2xl font-bold">Stonks Pizza's</a>
                        </div>
                        <div class="flex items-center">
                            <a href="#" class="text-gray-300 hover:text-white px-3 py-2">Home</a>
                            <a href="#" class="text-gray-300 hover:text-white px-3 py-2">Menu</a>
                            <a href="#" class="text-gray-300 hover:text-white px-3 py-2">About</a>
                            <a href="#" class="text-gray-300 hover:text-white px-3 py-2">Contact</a>

                            @auth
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="text-sm text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-gray-200">Logout</button>
                                </form>
                            @else
                                <a href="{{ route('login') }}" class="text-sm text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-gray-200">Login</a>
                                <span class="text-gray-500 mx-1">/</span>
                                <a href="{{ route('register') }}" class="text-sm text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-gray-200">Register</a>
                            @endauth
                        </div>
                    </div>
                </div>
            </nav>

            @yield('content')
        </div>
    </body>
</html>
