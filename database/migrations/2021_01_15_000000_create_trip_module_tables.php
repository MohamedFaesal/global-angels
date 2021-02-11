<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTripModuleTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->index();
            $table->foreignId('country_from')->index();
            $table->foreignId('country_to')->index();
            $table->date('trip_date')->index();
            $table->date('arrival_date')->index();
            $table->date('receive_requests_till')->index();
            $table->string('weight_unit');
            $table->decimal('available_weight');
            $table->decimal('consumed_weight')->nullable();
            $table->enum('status', [
                'pending',
                'approved',
            ])->default('pending')->index();
            $table->string('image');
            $table->timestamps();
        });

        Schema::create('trip_categories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('trip_id')->index();
            $table->foreignId('category_id')->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trip_categories');
        Schema::dropIfExists('trips');
    }
}
