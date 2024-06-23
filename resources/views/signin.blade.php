@extends('layouts.default')

@section('content')
    <x-card>
        <x-slot:title>
            Vul je code in om de RSVP in te vullen!
        </x-slot:title>

        <x-messages />

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

            <div class="mt-4 flex space-x-2" data-hs-pin-input>
                @foreach(range(0, 5) as $index)
                    <input type="text"
                           value=""
                           class="block size-[46px] text-center border-gray-200 rounded-md text-sm [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none focus:border-amber-500 focus:ring-amber-500 disabled:opacity-50 disabled:pointer-events-none"
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
    </x-card>
@endsection
