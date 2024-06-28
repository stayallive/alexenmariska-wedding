<?php

namespace App\Models\Invite;

use App\Models\Invite;
use App\Enums\FoodOption;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int                        $id
 * @property string                     $ulid
 * @property int                        $invite_id
 * @property string                     $name
 * @property bool|null                  $rsvp
 * @property \App\Enums\FoodOption|null $food_entree
 * @property \App\Enums\FoodOption|null $food_main
 * @property string|null                $diet
 * @property string|null                $email
 * @property \Carbon\Carbon             $created_at
 * @property \Carbon\Carbon             $updated_at
 */
class People extends Model
{
    use HasUlids;

    protected $table = 'invite_peoples';

    protected function casts(): array
    {
        return [
            'rsvp'        => 'boolean',
            'food_entree' => FoodOption::class,
            'food_main'   => FoodOption::class,
        ];
    }

    public function __toString(): string
    {
        return $this->name;
    }

    public function invite(): BelongsTo
    {
        return $this->belongsTo(Invite::class);
    }

    public function uniqueIds(): array
    {
        return ['ulid'];
    }
}
