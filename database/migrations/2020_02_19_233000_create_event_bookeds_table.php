<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventBookedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_booked', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('event_id');
            $table->foreign('event_id')->references('id')->on('events');

            $table->string('first_name',200);
            $table->string('last_name',200);
            $table->string('mobile',50);
            $table->string('email',200)->nullable();
            $table->string('academic_qualification',255)->nullable();
            $table->string('work_experience',255)->nullable();
            $table->string('field_of_work',255)->nullable();
            $table->string('country_of_work',255)->nullable();
            $table->tinyInteger('status')->nullable();

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
        Schema::dropIfExists('event_bookeds');
    }
}
