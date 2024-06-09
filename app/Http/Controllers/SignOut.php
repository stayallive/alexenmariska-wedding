<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class SignOut
{
    public function __invoke(Request $request): RedirectResponse
    {
        session()->invalidate();

        return to_route('signin');
    }
}
