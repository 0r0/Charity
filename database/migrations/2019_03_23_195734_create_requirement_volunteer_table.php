<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequirementVolunteerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requirement_volunteer', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('requirement_id')->unsigned();
            $table->integer('volunteer_id')->unsigned();
            $table->timestamps();
            $table->foreign('requirement_id')->references('id')->on('requirements')->unsigned();;
            $table->foreign('volunteer_id')->references('id')->on('volunteers')->unsigned();

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('requirement_volunteer');
    }
}
