<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
        </style>
    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-dots-lighter dark:bg-gray-900 selection:bg-emerald-500 selection:text-matisse-400">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-matisse-800 hover:text-matisse-900 dark:text-matisse-400 dark:hover:text-matisse-400 focus:outline focus:outline-2 focus:rounded-sm focus:outline-emerald-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-matisse-800 hover:text-matisse-900 dark:text-matisse-400 dark:hover:text-matisse-400 focus:outline focus:outline-2 focus:rounded-sm focus:outline-emerald-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-matisse-800 hover:text-matisse-900 dark:text-matisse-400 dark:hover:text-matisse-400 focus:outline focus:outline-2 focus:rounded-sm focus:outline-emerald-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <div class="flex justify-start">
                    <img class="w-40" src="{{ asset('images/toybox-logo.png') }}" alt="Toybox for Laravel logo">
                    <div class="self-center text-matisse-900 dark:text-matisse-400">
                        <h1 class="text-2xl text-emerald-400">Toybox</h1>
                        <span class="text-xl">Starter kit for <span class="text-red-500">Laravel</span></span>
                    </div>
                </div>

                <div class="mt-16">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                        <a href="https://laravel.com/docs" class="scale-100 p-6 bg-white dark:bg-voodoo-800/50 dark:bg-gradient-to-bl from-matisse-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-matisse-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-emerald-500">
                            <div>
                                <img class="h-16 w-16" src="{{ asset('images/laravel-logo.svg') }}">

                                <h2 class="mt-6 text-xl font-semibold text-matisse-900 dark:text-emerald-400">Laravel Documentation</h2>

                                <p class="mt-4 text-matisse-500 dark:text-matisse-400 text-sm leading-relaxed">
                                    Laravel has wonderful documentation covering every aspect of the framework. Whether you are a newcomer or have prior experience with Laravel, we recommend reading our documentation from beginning to end.
                                </p>
                            </div>

                            <x-heroicon-o-arrow-right class="self-center shrink-0 stroke-emerald-500 w-6 h-6 mx-6"></x-heroicon-o-arrow-right>
                        </a>

                        <a href="https://filamentphp.com/" class="scale-100 p-6 bg-white dark:bg-voodoo-800/50 dark:bg-gradient-to-bl from-matisse-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-matisse-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-emerald-500">
                            <div>
                                <img class="h-16 w-16" src="{{ asset('images/filament-logo.png') }}">

                                <h2 class="mt-6 text-xl font-semibold text-matisse-900 dark:text-emerald-400">Filament</h2>

                                <p class="mt-4 text-matisse-500 dark:text-matisse-400 text-sm leading-relaxed">
                                     A collection of beautiful full-stack components, as well as an excellent admin panel starter. The perfect starting point for your next app.
                                </p>
                            </div>

                            <x-heroicon-o-arrow-right class="self-center shrink-0 stroke-emerald-500 w-6 h-6 mx-6"></x-heroicon-o-arrow-right>
                        </a>

                        <a href="https://laravel.com/docs/starter-kits#laravel-breeze" class="scale-100 p-6 bg-white dark:bg-voodoo-800/50 dark:bg-gradient-to-bl from-matisse-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-matisse-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-emerald-500">
                            <div>
                                <img class="h-16 w-16" src="{{ asset('images/breeze-logo-icon.png') }}">

                                <h2 class="mt-6 text-xl font-semibold text-matisse-900 dark:text-emerald-400">Breeze</h2>

                                <p class="mt-4 text-matisse-500 dark:text-matisse-400 text-sm leading-relaxed">
                                     Breeze is a minimal, simple implementation of all of Laravel's authentication features, including login, registration, password reset, email verification, and password confirmation. In addition, Breeze includes a simple "profile" page where the user may update their name, email address, and password.
                                </p>
                            </div>

                            <x-heroicon-o-arrow-right class="self-center shrink-0 stroke-emerald-500 w-6 h-6 mx-6"></x-heroicon-o-arrow-right>
                        </a>
                    </div>
                </div>

                <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-matisse-500 dark:text-matisse-400 sm:text-left">
                        <div class="flex items-center gap-4">
                            <a href="https://tip-jar.co.za/@thecapegreek" class="group inline-flex items-center hover:text-matisse-700 dark:hover:text-matisse-400 focus:outline focus:outline-2 focus:rounded-sm focus:outline-emerald-500">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="-mt-px mr-1 w-5 h-5 stroke-matisse-400 dark:stroke-matisse-600 group-hover:stroke-matisse-600 dark:group-hover:stroke-matisse-400">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                </svg>
                                Sponsor
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-matisse-500 dark:text-matisse-400 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
