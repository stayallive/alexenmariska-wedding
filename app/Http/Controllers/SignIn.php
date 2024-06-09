<?php

namespace App\Http\Controllers;

use App\Models\Invite;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class SignIn
{
    public function __invoke(Request $request): RedirectResponse
    {
        if ($request->filled('pin') && strlen($request->string('pin')) === 6) {
            $invite = Invite::query()->where('pin_code', $request->string('pin'))->first();

            if ($invite !== null) {
                session()->put('invite_id', $invite->id);

                return to_route('invite');
            }
        }

        return to_route('signin')->with('error', 'Hmm, die PIN is niet correct!');
    }
}
