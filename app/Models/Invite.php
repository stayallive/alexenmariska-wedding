<?php

namespace App\Models;

use App\Models\Invite\People;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property int            $id
 * @property string         $pin_code
 * @property string|null    $comment
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 */
class Invite extends Model
{
    protected $table = 'invites';

    public function people(): HasMany
    {
        return $this->hasMany(People::class);
    }
}
