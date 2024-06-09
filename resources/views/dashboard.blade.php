@extends('layouts.default')

@section('content')
    <x-card>
        <x-slot:title>
            Welkom!
            <br>
            Vul de RSVP in voor 1 Augustus!
        </x-slot:title>

        <div class="mt-4 w-full flex flex-col gap-y-2">
            @foreach(invite()->people as $person)
                <a href="{{ route('rsvp', $person->ulid) }}"
                   class="block w-full py-3 px-4 text-center rounded-card border border-amber-500 text-amber-500 hover:border-amber-800 hover:text-amber-800 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-400 dark:text-neutral-400 dark:hover:text-neutral-300 dark:hover:border-neutral-300">
                    @if($person->rsvp === null)
                        Invullen voor "{{ $person }}"
                    @else
                        Bijwerken voor "{{ $person }}"
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

        <div class="mt-8 mb-4 w-full hs-accordion-group">
            <x-accordion-item title="Waar is de bruiloft?">
                De bruiloft is in Ross Lovell aan den IJssel (<a href="https://maps.app.goo.gl/LpmVCq9D5CRPKSnB8" class="text-amber-500">Google Maps</a>). Er is ruim parkeerplek voor de deur van de locatie.
            </x-accordion-item>

            <x-accordion-item title="Wanneer is de bruiloft?">
                De bruiloft is op 24 Augustus 2024. Je wordt om 13:30 op de locatie verwacht.
            </x-accordion-item>

            <x-accordion-item title="Kan ik iemand anders meenemen?">
                Nee, we houden het graag klein. Alleen de mensen die hierboven staan genoemd zijn uitgenodigd.
            </x-accordion-item>

            <x-accordion-item title="Hebben jullie cadeauwensen?">
                Jazeker! Wij willen graag op huwelijksreis naar IJsland. We gaan daar ook met onze fotograaf foto's maken. Daar zouden we graag een bijdrage voor willen hebben.
            </x-accordion-item>

            <x-accordion-item title="Ik heb een andere vraag!">
                Dat kan, mail ons op <a href="mailto:contact@alexenmariska.wedding" class="text-amber-500">contact@alexenmariska.wedding</a> dan beantwoorden we hem zo snel mogelijk!
            </x-accordion-item>
        </div>
    </x-card>
@endsection
