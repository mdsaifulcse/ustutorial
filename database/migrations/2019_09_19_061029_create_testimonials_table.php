<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestimonialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testimonials', function (Blueprint $table) {
            $table->increments('id');
            $table->string('course_name',250)->nullable();
            $table->tinyInteger('rating',false,1)->nullable();
            $table->string('name',250);
            $table->text('content')->nullable();
            $table->string('image',250)->nullable();
            $table->string('image_small',250)->nullable();
            $table->string('url',255)->nullable();
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
        Schema::dropIfExists('testimonials');
    }
}
