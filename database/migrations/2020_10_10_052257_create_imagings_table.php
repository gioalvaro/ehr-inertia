<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imagings', function (Blueprint $table) {
            $table->id();
            $table->text('observation')->nullable();
            $table->enum('type', ['ct', 'mri', 'ultrasound', 'rx', 'endoscopy']);
            $table->text('image_url')->nullable();
            $table->foreignId('encounter_id')->constrained('encounters');
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
        Schema::dropIfExists('imagings');
    }
}