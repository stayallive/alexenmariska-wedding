<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class SignIn
{
    public function __invoke(Request $request): RedirectResponse
    {
        return to_route('welcome')->with('error', 'Hmm, die PIN is niet correct!');
    }
}
