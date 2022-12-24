<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exams', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('questionnaire_id')->nullable();
            $table->foreign('questionnaire_id', 'exam_questionnaire_fk')->on('questionnaires')->references('id');
            $table->unsignedBigInteger('discipline_id')->nullable();
            $table->foreign('discipline_id', 'exam_discipline_fk')->on('disciplines')->references('id');
            $table->integer('mark')->nullable();
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
        Schema::dropIfExists('exams');
    }
};
