<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicationVerificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medication_verifications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('encounter_id')->constrained('encounters');
            $table->foreignId('medication_id')->constrained('medications');
            $table->boolean('verified')->nullable();
            $table->boolean('discontinued')->nullable();
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
        Schema::dropIfExists('medication_verifications');
    }
}
