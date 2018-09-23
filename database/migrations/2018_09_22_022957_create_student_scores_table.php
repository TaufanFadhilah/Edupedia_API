<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentScoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_scores', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('student_id');
            $table->tinyInteger('indonesia_1')->default(0);
            $table->tinyInteger('indonesia_2')->default(0);
            $table->tinyInteger('indonesia_3')->default(0);
            $table->tinyInteger('indonesia_4')->default(0);
            $table->tinyInteger('english_1')->default(0);
            $table->tinyInteger('english_2')->default(0);
            $table->tinyInteger('english_3')->default(0);
            $table->tinyInteger('english_4')->default(0);
            $table->tinyInteger('math_1')->default(0);
            $table->tinyInteger('math_2')->default(0);
            $table->tinyInteger('math_3')->default(0);
            $table->tinyInteger('math_4')->default(0);
            $table->tinyInteger('major_1')->default(0);
            $table->tinyInteger('major_2')->default(0);
            $table->tinyInteger('major_3')->default(0);
            $table->tinyInteger('major_4')->default(0);
            $table->string('certificate')->nullable();
            $table->timestamps();

            $table->foreign('student_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_scores');
    }
}
