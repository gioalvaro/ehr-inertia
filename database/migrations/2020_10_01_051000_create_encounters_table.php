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
            $table->dateTime('scheduled_time')->nullable();
            $table->dateTime('arrival_time')->nullable();
            $table->boolean('check')->nullable();
            $table->float('bmi')->nullable();
            $table->longText('current_vitals')->nullable();
            $table->boolean('allergies_check')->nullable();
            $table->string('allergies')->nullable();
            $table->integer('weight')->nullable();
            $table->integer('height')->nullable();
            $table->float('temperature')->nullable();
            $table->enum('temperature_type', ['oral', 'rectum', 'armpit'])->nullable();
            $table->string('bp')->nullable();
            $table->integer('hr')->nullable();
            $table->integer('rr')->nullable();
            $table->integer('osat')->nullable();
            $table->integer('ga')->nullable();
            $table->integer('edd')->nullable();
            $table->integer('lmp')->nullable();
            $table->integer('gptal')->nullable();
            $table->foreignId('patient_id')->constrained('patients');
            $table->foreignId('department_id')->nullable()->constrained('departments');
            $table->foreignId('provider_id')->nullable()->constrained('providers');
            $table->boolean("test");
            $table->boolean("open");
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
