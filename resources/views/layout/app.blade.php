<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" value="{{ csrf_token() }}"/>
        <title>Vue JS CRUD Operations in Laravel</title>
        @vite('resources/sass/app.scss')
    </head>
    <body class="flex justify-center items-center">
        <div class="container mx-auto px-4" id="app"></div>
        @vite('resources/js/app.js')
    </body>
    <body class="antialiased">
    </body>
</html>
