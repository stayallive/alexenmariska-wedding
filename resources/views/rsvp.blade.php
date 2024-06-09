@extends('layouts.default')

@section('content')
    <x-card>
        <x-slot:title>
            Welkom! Vul de RSVP in voor 1 Augustus!
        </x-slot:title>

        <div class="mt-4 w-full flex flex-col gap-y-2">
            @foreach(invite()->people as $person)
                <a href="#"
                   class="block w-full py-3 px-4 text-center rounded-card border border-amber-500 text-amber-500 hover:border-amber-800 hover:text-amber-800 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-400 dark:text-neutral-400 dark:hover:text-neutral-300 dark:hover:border-neutral-300">
                    Invullen voor "{{ $person }}"
                    @if($person->rsvp !== null)
                        <br>
                        <small>
                            @if($person->rsvp === true)
                                RSVP: Ja
                            @elseif($person->rsvp === false)
                                RSVP: Nee
                            @endif
                        </small>
                    @endif
                </a>
            @endforeach
        </div>
    </x-card>
@endsection
