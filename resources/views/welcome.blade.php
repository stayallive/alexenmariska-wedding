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
        <div class="container mx-auto p-4">
            <div class="min-h-60 flex flex-col bg-white border shadow-sm rounded dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
                <div class="flex flex-auto flex-col justify-center items-center p-6">
                    <h3 class="text-lg font-bold text-gray-800 dark:text-white">
                        Alex & Mariska Wedding
                    </h3>
                    <p class="mt-2 text-gray-500 dark:text-neutral-400">
                        Vul je PIN in om de RSVP in te vullen!
                    </p>

                    @session('error')
                        <div class="mt-2 bg-red-100 border border-red-200 text-sm text-red-800 rounded-lg p-4 dark:bg-red-800/10 dark:border-red-900 dark:text-red-500" role="alert">
                            {{ session('error') }}
                        </div>
                    @endsession

                    <form x-ref="form" x-data="{
                        pin: '******',
                        async handlePinChange(e, index) {
                            this.pin = this.pin.replaceAt(index, e.target.value.at(-1) ?? '0');

                            if (this.pin.replace(/\D/g, '').length === 6) {
                                await this.$nextTick();
                                this.$refs.form.submit();
                            }
                        },
                    }" action="{{ route('signin') }}" method="post">
                        @csrf
                        <input type="hidden" name="pin" x-model="pin">

                        <div class="mt-4 flex space-x-3" data-hs-pin-input>
                            @foreach(range(0, 5) as $index)
                                <input type="text"
                                       value=""
                                       class="block size-[46px] text-center border-gray-200 rounded-md text-sm [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                       pattern="[0-9]*"
                                       inputmode="numeric"
                                       x-on:input="handlePinChange($event, {{ $index }})"
                                       placeholder="⚬"
                                       autocomplete="off"
                                       data-hs-pin-input-item=""
                                >
                            @endforeach
                        </div>
                    </form>

                    <a class="mt-3 inline-flex items-center gap-x-1 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400"
                       href="mailto:contact@alexenmariska.wedding">
                        Contact
                    </a>
                </div>
            </div>
        </div>

        @vite('resources/js/app.js')
    </body>
</html>
