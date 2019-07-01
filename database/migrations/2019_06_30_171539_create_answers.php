<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('email');
            $table->unsignedInteger('first_question');
            $table->unsignedInteger('second_question');
            $table->unsignedInteger('third_question');
            $table->unsignedInteger('fourth_question');
            $table->unsignedInteger('fifth_question');
            $table->unsignedInteger('sixth_question');
            $table->unsignedInteger('seventh_question');
            $table->unsignedInteger('eighth_question');
            $table->unsignedInteger('ninth_question');
            $table->unsignedInteger('tenth_question');
            $table->string('perspective_type');
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
        Schema::dropIfExists('answers');
    }
}
