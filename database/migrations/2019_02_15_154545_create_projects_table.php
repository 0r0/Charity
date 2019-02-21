<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');//project name
            $table->string('picture');//where that picture or video is saved
            $table->string('supporter');
            $table->longText('summery');//it is equal to charity that create that project :))
            $table->longText('description');
            $table->longText('report');//report that made after finish project
            $table->string('money');//budget that need to run project
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
        Schema::dropIfExists('projects');
    }
}
