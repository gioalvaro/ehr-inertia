<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNursingNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nursing_notes', function (Blueprint $table) {
            $table->id();
            $table->longText('note');
            $table->foreignId('patient_id')->constrained('patients');
            $table->foreignId('nursing_type_id')->constrained('nursing_types');
            $table->foreignId('provider_id')->constrained('providers');
            $table->foreignId('department_id')->constrained('departments');
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
        Schema::dropIfExists('nursing_notes');
    }
}
