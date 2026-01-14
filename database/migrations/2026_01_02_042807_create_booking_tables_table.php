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
      Schema::create('booking_tables', function (Blueprint $table) {
    $table->id();
    $table->unsignedBigInteger('guest_id');
    $table->unsignedBigInteger('room_id');
    $table->string('check_in_data');
    $table->string('check_out_data');
    $table->string('booking_data');
    $table->string('status');
    $table->timestamps();




           $table->foreign('guest_id')->references('id')->on('users')->onDelete('cascade');
           $table->foreign('room_id')->references('id')->on('rooms')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booking_tables');
    }
};
