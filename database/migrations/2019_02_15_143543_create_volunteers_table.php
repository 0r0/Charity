<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVolunteersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('volunteers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('userName')->unique();
            $table->string('firstName')->nullable();
            $table->string('lastName')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('company')->nullable();
            $table->string('address')->nullable();
            $table->longText('bio')->nullable();
            $table->string('imagename')->nullable();
            $table->string('skill')->nullable();
            $table->string('intrest')->nullable();
            $table->string('resume')->nullable();
            $table->unsignedBigInteger('mobileNumber')->nullable();
            $table->unsignedBigInteger('phoneNumber')->nullable();
            $table->boolean('is_complete')->default(false);
            $table->string('site')->nullable();
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
        Schema::dropIfExists('volunteers');
    }
}
