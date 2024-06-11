@extends('layouts.default')

@section('content')
    <x-card>
        <x-slot:title>
            Welkom!
            <br>
            Vul de RSVP in voor 1 Augustus!
        </x-slot:title>

        <div class="mt-6 w-full flex flex-col gap-y-2">
            @foreach(invite()->people as $person)
                <a href="{{ route('rsvp', $person->ulid) }}"
                   class="block w-full py-3 px-4 text-center rounded-card border border-amber-500 text-amber-500 hover:border-amber-700 hover:text-amber-700 disabled:opacity-50 disabled:pointer-events-none">
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

        <div class="mt-8 w-full hs-accordion-group">
            <x-accordion-item title="Wanneer is de bruiloft?">
                De bruiloft is op 24 Augustus 2024. Je wordt om 13:30 op de locatie verwacht tot ongeveer 21:00, uiteraard zorgen wij voor diner en taart.
            </x-accordion-item>

            <x-accordion-item title="Waar is de bruiloft?">
                De bruiloft is in Ross Lovell aan den IJssel (<a href="https://maps.app.goo.gl/LpmVCq9D5CRPKSnB8" class="text-amber-500">Google Maps</a>).
                Er is ruim parkeerplek voor de deur van de locatie.
            </x-accordion-item>

            <x-accordion-item title="Is er een dresscode?">
                Ja, de dresscode is cocktail. Denk bijvoorbeeld aan een feestelijk jurkje voor vrouwen en een pak of nette broek (geen spijkerbroek) met overhemd voor mannen.
                Twijfel je? Lees <a href="https://www.theperfectwedding.nl/artikelen/3895/dresscode-cocktail" class="text-amber-500" rel="noopener">hier</a> meer.
            </x-accordion-item>

            <x-accordion-item title="Hebben jullie cadeauwensen?">
                Jazeker! Wij willen graag op huwelijksreis naar IJsland. We gaan daar ook met onze fotograaf foto's maken. Daar zouden we graag een bijdrage voor willen hebben.
            </x-accordion-item>

            <x-accordion-item title="Mag ik foto's maken?">
                Ja, leuk! Maar... we vragen je wel om dit <span class="underline">niet</span> tijdens de ceremonie te doen! We zouden het ook erg leuk vinden om de foto's die je hebt gemaakt opgestuurd te krijgen.
            </x-accordion-item>

            <x-accordion-item title="Kan ik iemand anders meenemen?">
                Nee, we houden het graag klein. Alleen de mensen die hierboven staan genoemd zijn uitgenodigd. Twijfel je? Vraag het ons!
            </x-accordion-item>

            <x-accordion-item title="Ik heb een andere vraag!">
                Dat kan, mail ons op <a href="mailto:contact@alexenmariska.wedding" class="text-amber-500">contact@alexenmariska.wedding</a> dan beantwoorden we hem zo snel mogelijk!
            </x-accordion-item>
        </div>
    </x-card>
@endsection
