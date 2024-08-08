<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8    ">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Notes</title>

        <link rel="icon" href="{{ Storage::url('img/notes-notepad-svgrepo-com.png') }}">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased bg-bg_biru">
        <div class="min-h-screen pb-20 relative">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-24 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main class="lg:px-24 px-5 text-black">
                @session('message')
                    <x-alert></x-alert>
                @endsession
                {{ $slot }}
            </main>

            <x-footer></x-footer>
        </div>

        <script src="https://kit.fontawesome.com/8b0b03f283.js" crossorigin="anonymous"></script>
    </body>
</html>
