<?php

namespace App\Http\Controllers\RSVP;

use App\Enums\FoodOption;
use App\Mail\InviteUpdated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\RedirectResponse;

class SubmitForm
{
    public function __invoke(Request $request, string $personId): RedirectResponse
    {
        $person = invite_or_fail()->people()->where('ulid', '=', $personId)->firstOrFail();

        $person->rsvp        = $request->boolean('answer');
        $person->food_entree = $person->rsvp ? $request->enum('food_entree', FoodOption::class) : null;
        $person->food_main   = $person->rsvp ? $request->enum('food_main', FoodOption::class) : null;
        $person->diet        = $person->rsvp ? $request->string('diet') : null;
        $person->email       = $person->rsvp ? $request->string('email') : null;
        $person->save();

        dispatch(static function () use ($person) {
            Mail::to('contact@alexenmariska.wedding')->send(
                new InviteUpdated($person),
            );
        })->afterResponse();

        return redirect()->route('invite')->with('message', 'Opgeslagen! Bedankt voor het invullen!');
    }
}
