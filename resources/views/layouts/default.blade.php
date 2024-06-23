<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="robots" content="noindex">

        @if(empty($title))
            <title>Alex & Mariska Wedding</title>
        @else
            <title>{{ $title }} - Alex & Mariska Wedding</title>
        @endif

        <link rel="apple-touch-icon" sizes="180x180" href="/images/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon-16x16.png">

        @vite('resources/css/app.css')
        <style>{!! file_get_contents(resource_path('css/fonts.css')) !!}</style>
    </head>
    <body class="text-neutral-700">
        <div class="h-dvh w-full bg-cover bg-no-repeat bg-center" style="background-image: url('{{ asset('images/background.jpg') }}')">
            @yield('content')
        </div>

        @vite('resources/js/app.js')
    </body>
</html>
