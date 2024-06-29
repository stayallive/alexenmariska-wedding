<x-mail::message>
# RSVP van {{ $person }}

Omschrijving van de invite: "{{ $person->invite->comment }}"

<x-mail::table>
| Veld         | Waarde                               |
|:------------ |:------------------------------------ |
| RSVP         | {{ $person->rsvp ? 'Ja' : 'Nee' }}   |
| Voorgerecht  | {{ $person->food_entree?->label() }} |
| Hoofdgerecht | {{ $person->food_main?->label() }}   |
| Dieetwensen  | {{ $person->diet }}                  |
| E-mail       | {{ $person->email }}                 |
</x-mail::table>
</x-mail::message>
