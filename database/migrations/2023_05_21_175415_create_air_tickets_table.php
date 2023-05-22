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
        Schema::create('air_tickets', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('email', 255)->nullable();
            $table->string('phone', 255);
            $table->string('where_from', 255);
            $table->string('where_to', 255);
            $table->dateTime('dob');
            $table->dateTime('departure_date');
            $table->dateTime('return_date');
            $table->string('adult', 255)->nullable();
            $table->string('child', 255)->nullable();
            $table->string('infant', 255)->nullable();
            $table->string('message', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('air_tickets');
    }
};
