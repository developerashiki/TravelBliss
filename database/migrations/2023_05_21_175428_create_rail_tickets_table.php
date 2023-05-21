<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('rail_tickets', function (Blueprint $table) {
            $table->id();
            $table->string('leaving', 255);
            $table->string('destination', 255);
            $table->string('email', 255)->nullable();
            $table->string('phone', 255);
            $table->dateTime('dob');
            $table->string('adult', 255);
            $table->string('child', 255);
            $table->string('infant', 255);
            $table->string('message', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rail_tickets');
    }
};
