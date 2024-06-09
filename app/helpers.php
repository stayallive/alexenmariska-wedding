<?php

use Illuminate\Support\Facades\Context;

function invite(): ?App\Models\Invite
{
    if (Context::hasHidden('invite')) {
        return Context::getHidden('invite');
    }

    $inviteId = session('invite_id');

    $invite = empty($inviteId)
        ? null
        : App\Models\Invite::query()->find($inviteId);

    Context::addHidden('invite', $invite);

    return $invite;
}

function invite_or_fail(): App\Models\Invite
{
    $invite = invite();

    abort_if($invite === null, 404);

    return $invite;
}

function bool_as_js(?bool $value): string
{
    if ($value === null) {
        return '';
    }

    return $value ? 'true' : 'false';
}
