<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivofijoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activofijo', function (Blueprint $table) {
            $table->id();
            $table->string('numInventario')->unique();
            $table->string('tipo');
            $table->string('descripcion');
            $table->string('numSerie')->nullable();
            $table->string('resguardo');
            $table->decimal('valorAdqui');
            $table->boolean('verificado')->nullable();
            $table->integer('numTrabajador')->nullable();
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
        Schema::dropIfExists('activofijo');
    }
}
