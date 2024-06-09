<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('invites', static function (Blueprint $table) {
            $table->id();

            $table->string('pin_code', 6)->unique();
            $table->string('comment')->nullable();

            $table->timestamps();
        });
    }
};
