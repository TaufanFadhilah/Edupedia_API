<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_details', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->integer('student_number')->unique();
            $table->string('school')->nullable();
            $table->string('religion')->nullable();
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('father_job')->nullable();
            $table->string('mother_job')->nullable();
            $table->string('father_phone')->nullable();
            $table->string('mother_phone')->nullable();
            $table->text('parent_address')->nullable();
            $table->unsignedInteger('choosen_university');
            $table->unsignedInteger('choosen_major1');
            $table->unsignedInteger('choosen_major2');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('choosen_university')->references('id')->on('universities');
            $table->foreign('choosen_major1')->references('id')->on('majors');
            $table->foreign('choosen_major2')->references('id')->on('majors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_details');
    }
}
