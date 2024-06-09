<?php

use App\Models\Invite;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('invite_peoples', static function (Blueprint $table) {
            $table->id();
            $table->ulid()->unique();

            $table->foreignIdFor(Invite::class, 'invite_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();

            $table->string('name');

            $table->boolean('rsvp')->nullable();
            $table->string('food')->nullable();
            $table->string('diet')->nullable();
            $table->string('email')->nullable();

            $table->timestamps();
        });
    }
};
