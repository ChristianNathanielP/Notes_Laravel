<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Notes</title>

        <link rel="icon" href="{{ Storage::url('img/notes-notepad-svgrepo-com.png') }}">


        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-fredoka text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-bg_biru px-3">
            <div>
                <a href="/">
                    <img src="{{ Storage::url('img/notes-notepad-svgrepo-com.png') }}" alt="" class="w-20 h-20 mx-auto drop-shadow-xl">
                    <p class="lg:text-5xl text-3xl font-fredoka font-semibold text-kuning text-stroke-2 text-stroke-black mx-auto">Notes</p>

                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-biru2 shadow-md overflow-hidden rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>

