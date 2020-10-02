<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhysicianNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('physician_notes', function (Blueprint $table) {
            $table->id();
            $table->longText('note');
            $table->foreignId('patient_id')->constrained('patients');
            $table->foreignId('department_id')->constrained('departments');
            $table->foreignId('physician_type_id')->constrained('physician_types');
            $table->foreignId('provider_id')->constrained('providers');            
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
        Schema::dropIfExists('physician_notes');
    }
}
