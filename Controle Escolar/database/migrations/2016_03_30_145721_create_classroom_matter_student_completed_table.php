<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClassroomMatterStudentCompletedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classroom_matter_student_completed', function (Blueprint $table) {
            $table->unsignedInteger('classroom_matter_id');
            $table->unsignedInteger('student_id');

            $table->foreign('classroom_matter_id')->references('id')->on('classroom_matter');
            $table->foreign('student_id')->references('id')->on('students');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('classroom_matter_student_completed');
    }
}
