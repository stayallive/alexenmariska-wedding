<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('invite_peoples', static function (Blueprint $table) {
            $table->string('food_entree')->nullable()->after('rsvp');
        });
    }
};
