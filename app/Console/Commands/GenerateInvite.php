<?php

namespace App\Console\Commands;

use App\Models\Invite;
use Valorin\Random\Random;
use Illuminate\Console\Command;
use function Laravel\Prompts\text;

class GenerateInvite extends Command
{
    protected $signature   = 'app:generate-invite';
    protected $description = 'Generate a new invite';

    public function handle(): int
    {
        $invite = new Invite;

        $invite->pin_code = Random::otp();
        $invite->comment  = text('Invite description', 'Alex & Mariska');

        $invite->save();

        do {
            $name = text('Invitee name', 'John Doe');

            if (!empty($name)) {
                $invite->people()->create(compact('name'));
            }
        } while (!empty($name));

        $this->info("Invite #{$invite->id} created with pin code {$invite->pin_code}");

        return self::SUCCESS;
    }
}
