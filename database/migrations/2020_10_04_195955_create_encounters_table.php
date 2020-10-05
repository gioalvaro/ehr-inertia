<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEncountersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encounters', function (Blueprint $table) {
            $table->id();
            $table->string('reason')->nullable();
            $table->dateTime('scheduled_time');
            $table->dateTime('arrival_time');
            $table->boolean('check')->nullable();
            $table->float('bmi');
            $table->longText('current_vitals');
            $table->boolean('allergies_check')->nullable();
            $table->string('allergies')->nullable();
            $table->float('temperature')->nullable();
            $table->enum('temperature_type', ['oral', 'rectum', 'armpit'])->nullable();
            $table->string('bp')->nullable();
            $table->string('hr')->nullable();
            $table->string('rr')->nullable();
            $table->string('osat')->nullable();
            $table->integer('ga')->nullable();
            $table->integer('edd')->nullable();
            $table->integer('lmp')->nullable();
            $table->integer('gptal')->nullable();
            $table->foreignId('patient_id')->constrained('patients');
            $table->foreignId('deparment_id')->constrained('deparments');
            $table->softDeletes();
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
        Schema::dropIfExists('encounters');
    }
}
