<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViajesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Viajes', function (Blueprint $table) {
            $table->id();
            $table->time('time')->default('00:00');
            $table->date('date');
            $table->timestamps();
            $table->unsignedBigInteger('id_destination')->nullable();
            $table->foreign('id_destination')->references('id')->on('destinos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('viajes');
    }
}
