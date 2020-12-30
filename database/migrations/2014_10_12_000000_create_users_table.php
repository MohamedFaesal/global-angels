<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**
        Facebook Account
         */
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('age');
            $table->string('country_id')->index();
            $table->string('state_id')->index();
            $table->string('phone')->index()->unique();
            $table->enum('gender', \App\Utils\UserGender::getGenders());
            $table->enum('user_type', \App\Utils\UserType::getTypes())->index();
            $table->string('email')->nullable()->index()->unique();
            $table->string('password')->nullable()->index();
            $table->string('facebook_id')->unique();
            $table->string('facebook_token', 250);
            $table->string('home_phone')->nullable();
            $table->string('address')->nullable();
            $table->text('photo')->nullable();
            $table->timestamp('phone_verified_at')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
