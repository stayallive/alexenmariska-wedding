<?php

namespace App\Http\Controllers\RSVP;

use App\Enums\FoodOption;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class SubmitForm
{
    public function __invoke(Request $request, string $personId): RedirectResponse
    {
        $person = invite_or_fail()->people()->where('ulid', '=', $personId)->firstOrFail();

        $person->rsvp  = $request->boolean('answer');
        $person->food  = $person->rsvp ? $request->enum('food', FoodOption::class) : null;
        $person->diet  = $person->rsvp ? $request->string('diet') : null;
        $person->email = $person->rsvp ? $request->string('email') : null;
        $person->save();

        return redirect()->route('invite');
    }
}
