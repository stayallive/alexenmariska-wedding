<!DOCTYPE html>
<html class="h-full" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="noindex">

        <title>Alex & Mariska Wedding</title>

        @vite('resources/css/app.css')
        <style>{!! file_get_contents(resource_path('css/fonts.css')) !!}</style>
    </head>
    <body class="h-full bg-auto bg-no-repeat bg-center" style="background-image: url('images/background.jpg'); background-size: cover">
        <div class="container mx-auto max-w-4xl p-4">
            @yield('content')
        </div>

        @vite('resources/js/app.js')
    </body>
</html>
