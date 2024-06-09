<!DOCTYPE html>
<html class="h-full" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="noindex">

        <title>Alex & Mariska Wedding</title>

        @vite('resources/css/app.css')
    </head>
    <body class="h-full bg-auto bg-no-repeat bg-center" style="background-image: url('images/background.jpg')">
        <div class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">
            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

            <div class="fixed inset-0 z-10 overflow-y-auto">
                <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                    <div class="relative transform overflow-hidden rounded-lg bg-white px-4 pb-4 pt-5 text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-sm sm:p-6">
                        <div>
                            <div class="mt-3 text-center sm:mt-5">
                                <h3 class="text-xl font-semibold leading-6 text-gray-900" id="modal-title">24-08-24</h3>
                                <div class="mt-2">
                                    <p class="text-sm text-gray-500">Markeer de datum in je agenda!</p>
                                    <p class="text-sm text-gray-500">Meer informatie volgt.</p>
                                    <p class="text-sm text-gray-500">Voor vragen neem contact met ons op!</p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 sm:mt-6">
                            <a href="mailto:contact@alexenmariska.wedding"
                               class="inline-flex w-full justify-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Contact</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
