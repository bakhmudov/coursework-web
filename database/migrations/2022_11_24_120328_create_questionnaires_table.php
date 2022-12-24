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
        Schema::create('questionnaires', function (Blueprint $table) {
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
            $table->id();
            $table->string('name')->nullable();
            $table->string('surname')->nullable();
            $table->string('patronymic')->nullable();
            $table->date('birthday')->nullable();
            $table->text('secondary_school')->nullable();
            $table->date('secschool_enddate')->nullable();
            $table->text('honors')->nullable();
            $table->text('address')->nullable();
            $table->text('phone_number')->nullable();
            $table->unsignedBigInteger('specialty_id')->nullable();
            $table->index('specialty_id', 'questionnaire_specialty_idx');
            $table->foreign('specialty_id', 'questionnaire_specialty_fk')->on('specialties')->references('id');
            $table->timestamps();

            $table->softDeletes();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questionnaires');
    }
};
