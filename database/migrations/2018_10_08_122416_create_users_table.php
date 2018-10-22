<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('user_id');
            $table->string('user_fullName');
            $table->string('user_email');
            $table->string('user_password');
            $table->string('user_emailVerification')->nullable();
            $table->integer('user_phoneNumber')->nullable();
            $table->string('user_phoneNumberVerification')->nullable();
            $table->integer('user_role')->default(0);
            $table->integer('user_plan')->default(0);
            $table->integer('user_group')->default(1);
            $table->integer('user_status')->default(1);
            $table->integer('user_wallet')->default(0);
            $table->string('user_address')->nullable();
            $table->string('user_birthday')->nullable();
            $table->string('user_gender')->default(0);
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
