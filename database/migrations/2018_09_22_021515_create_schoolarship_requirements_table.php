<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolarshipRequirementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schoolarship_requirements', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('schoolarship_id');
            $table->string('name');
            $table->timestamps();

            $table->foreign('schoolarship_id')->references('id')->on('schoolarships');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schoolarship_requirements');
    }
}
