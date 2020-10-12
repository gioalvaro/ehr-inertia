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
            $table->enum('type', [1, 2, 3, 4, 5]);
            $table->text('summary')->nullable();            
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
