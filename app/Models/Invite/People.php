<?php

namespace App\Models\Invite;

use App\Models\Invite;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int            $id
 * @property int            $invite_id
 * @property string         $name
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 */
class People extends Model
{
    protected $table = 'invite_peoples';

    public function __toString(): string
    {
        return $this->name;
    }

    public function invite(): BelongsTo
    {
        return $this->belongsTo(Invite::class);
    }
}
