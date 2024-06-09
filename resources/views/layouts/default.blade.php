<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="robots" content="noindex">

        <title>Alex & Mariska Wedding</title>

        @vite('resources/css/app.css')
        <style>{!! file_get_contents(resource_path('css/fonts.css')) !!}</style>
    </head>
    <body class="text-neutral-700">
        <div class="bg-cover bg-no-repeat bg-center" style="background-image: url('{{ asset('images/background.jpg') }}')">
            <div class="h-screen overflow-y-scroll">
                <div class="min-h-full flex justify-center items-center">
                    @yield('content')
                </div>
            </div>
        </div>

        @vite('resources/js/app.js')
    </body>
</html>
