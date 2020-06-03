<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepreciationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('depreciations', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('noInventario');
          $table->string('tipo');
          $table->string('descripcion');
          $table->double('montoOriginal');
          $table->integer('vidaUtil');
          $table->double('porcenjate');
          $table->double('total');
          $table->double('porDepreciar');
          $table->double('depreciacionAc');
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
        Schema::dropIfExists('depreciations');
    }
}
