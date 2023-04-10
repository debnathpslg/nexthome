<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Next Home</title>

        <!-- Fonts -->

        <!-- Styles -->
         @vite('resources/js/app.js')
         {{-- @vite('resources/css/app.css') --}}
         @inertiaHead
    </head>
    <body class="antialiased">
        @inertia
    </body>
</html>
