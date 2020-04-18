<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMatterLessonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matter_lesson', function (Blueprint $table) {
            $table->unsignedInteger('matter_id');
            $table->unsignedInteger('lesson_id');

            $table->foreign('matter_id')->references('id')->on('matters');
            $table->foreign('lesson_id')->references('id')->on('lessons');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('matter_lesson');
    }
}
