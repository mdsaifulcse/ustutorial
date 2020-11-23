<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',150);
            $table->string('mobile',50)->nullable();
            $table->string('email',150)->nullable();
            $table->string('image',250)->nullable();
            $table->integer('subject_id');
            $table->foreign('subject_id')->references('id')->on('quiz_category');

            $table->text('present_address')->nullable();
            $table->text('permanent_address')->nullable();
            $table->string('qualification',200)->nullable()->comment('Educational qualification');
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
        Schema::dropIfExists('teachers');
    }
}
