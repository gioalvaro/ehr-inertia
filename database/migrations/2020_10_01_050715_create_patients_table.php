<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->integer('mrn');
            $table->string('lastname');
            $table->string('firstname');
            $table->integer('age');
            $table->enum('sex', ['male', 'female']);
            $table->string('reason')->nullable();
            $table->dateTime('scheduled_time');
            $table->dateTime('arrival_time');
            $table->date('day_of_birth');
            $table->boolean('checkout')->nullable();
            $table->float('bmi',2,2);
            $table->longText('current_vitals');
            $table->boolean('allergies_check')->nullable();
            $table->string('allergies')->nullable();
            $table->float('temperature',3,2)->nullable();
            $table->enum('temperature_type', ['oral', 'rectum', 'armpit'])->nullable();
            $table->text('photo_url')->nullable();
            $table->integer('ga')->nullable();
            $table->integer('edd')->nullable();
            $table->integer('lmp')->nullable();
            $table->integer('gptal')->nullable();
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
        Schema::dropIfExists('patients');
    }
}
