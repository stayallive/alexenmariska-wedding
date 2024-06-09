<?php

namespace App\Http\Controllers\RSVP;

use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class ShowForm
{
    public function __invoke(string $personId): View|RedirectResponse
    {
        $person = invite_or_fail()->people()->where('ulid', '=', $personId)->first();

        if ($person === null) {
            return redirect()->route('dashboard');
        }

        return view('rsvp', compact('person'));
    }
}
