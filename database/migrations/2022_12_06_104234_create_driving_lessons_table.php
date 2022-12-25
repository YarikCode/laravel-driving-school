<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('driving_lessons', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('student_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('instructor_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('date');
            $table->time('time');
            $table->foreignId('car_id')->references('id')->on('cars')->onDelete('cascade');;
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
        Schema::dropIfExists('driving_lessons');
    }
};
