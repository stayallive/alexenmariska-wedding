@extends('layouts.default')

@section('content')
    <div class="flex flex-col h-screen justify-center items-center">
        <div class="min-h-60 flex flex-col bg-white border shadow-sm rounded-card">
            <div class="flex flex-auto flex-col justify-center items-center p-6">
                <h3 class="text-5xl leading-[4rem] font-['Braveheart'] text-copper">
                    Alex & Mariska
                </h3>
                <p class="mt-2 text-neutral-700">
                    Vul je PIN in om de RSVP in te vullen!
                </p>

                @session('error')
                <div class="mt-2 bg-red-100 border border-red-200 text-sm text-red-800 rounded-card p-4" role="alert">
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
                                   class="block size-[46px] text-center border-gray-200 rounded-md text-sm [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
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

                <a class="mt-4 inline-flex items-center gap-x-1 text-sm rounded-lg border border-transparent text-blue-600 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400"
                   href="mailto:contact@alexenmariska.wedding">
                    Contact
                </a>
            </div>
        </div>
    </div>
@endsection
