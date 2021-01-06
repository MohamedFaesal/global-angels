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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->integer('age')->nullable();
            $table->string('phone')->index()->unique();
            $table->enum('gender', \App\Utils\UserGender::getGenders())->nullable();
            $table->string('email')->nullable()->index()->unique();
            $table->string('password')->nullable()->index();
            $table->enum('social_type', \App\Utils\UserSocialType::getTypes())->index();
            $table->string('social_id')->index();
            $table->string('social_token', 1000)->nullable();
            $table->string('home_phone')->nullable();
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
