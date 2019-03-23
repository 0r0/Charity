<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('volunteer_id')->unsigned()->nullable();
            $table->integer('charity_id')->unsigned()->nullable();
            $table->integer('parent_id')->unsigned()->nullable();
            $table->text('body');
            $table->boolean('is_approved')->default(false);
            $table->integer('commentable_id')->unsigned();
            $table->string('commentable_type');
            $table->timestamps();
            $table->foreign('volunteer_id')->references('id')->on('volunteers')->unsigned();
            $table->foreign('charity_id')->references('id')->on('charities')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
