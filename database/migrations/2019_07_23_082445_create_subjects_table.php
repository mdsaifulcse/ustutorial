<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subjects', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('sub_course_id');
            $table->foreign('sub_course_id')->references('id')->on('sub_courses');

            $table->integer('branch_id')->nullable();
            $table->foreign('branch_id')->references('id')->on('branch');

            $table->string('subject_name',100);
            $table->string('short_name',50)->nullable();
            $table->tinyInteger('status',false,1)->default(1);
            $table->author();
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
        Schema::dropIfExists('subjects');
    }
}
