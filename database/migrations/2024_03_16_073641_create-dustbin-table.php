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
        Schema::create('dustbins', function (Blueprint $table) {
            $table->id();
            $table->decimal('latitude', 11, 7); // Latitude with 10 total digits and 8 decimal places
            $table->decimal('longitude', 11, 7); // Longitude with 11 total digits and 8 decimal places
            $table->bigInteger('level');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('dustbins');
    }
};
