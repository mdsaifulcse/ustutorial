<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',250);
            $table->text('overview')->nullable();
            $table->text('curriculum')->nullable();
            $table->string('instructor')->nullable();
            $table->integer('price',8,false)->nullable();
            $table->integer('discount',8,false)->nullable();
            $table->string('image',250)->nullable();
            $table->string('image_small',250)->nullable();
            $table->tinyInteger('show_at_home',1,false)->nullable();
            $table->author();
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
        Schema::dropIfExists('courses');
    }
}
