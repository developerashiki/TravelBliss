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
        Schema::create('hostel_bookings', function (Blueprint $table) {
            $table->id();
            $table->string('location', 255);
            $table->string('room', 255);
            $table->string('guest', 255)->nullable();
            $table->dateTime('check_in');
            $table->dateTime('check_out');
            $table->string('email', 255)->nullable();
            $table->string('phone', 255);
            $table->string('message', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hostel_bookings');
    }
};
