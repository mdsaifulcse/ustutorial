<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_details', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('course_id',false,10)->nullable();
            $table->foreign('course_id')->references('id')->on('courses');

            $table->string('title',250);
            $table->text('details')->nullable();
            $table->string('photo',250)->nullable();

            $table->tinyInteger('detail_type',false,1)->comment('1=overview, 2=curriculum, 3=features,4=Faqs');

            $table->tinyInteger('serial',false,3)->nullable();
            $table->tinyInteger('status',false,1)->default(1);

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
        Schema::dropIfExists('course_details');
    }
}
