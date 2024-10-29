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
        Schema::create('states', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->string('uf');
        });

        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->foreignId('state_id')->references('id')->on('states');
        });

        Schema::create('forecasts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('city_id')->references('id')->on('cities');
            $table->date('date');
            $table->integer('max_temp');
            $table->integer('min_temp');
            $table->integer('humidity');
            $table->integer('cloudiness');
            $table->integer('rain_probability');
            $table->string('condition');
        });

        Schema::create('saved_locations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('user_id')->references('id')->on('users');
            $table->foreignId('city_id')->references('id')->on('cities');
            $table->foreignId('state_id')->references('id')->on('states');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('saved_locations');
        Schema::dropIfExists('forecasts');
        Schema::dropIfExists('cities');
        Schema::dropIfExists('states');
    }
};
