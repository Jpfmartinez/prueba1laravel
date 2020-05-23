<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrigger extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {


      DB::unprepared('CREATE TRIGGER tr_Bitacora AFTER DELETE ON `activofijo` FOR EACH ROW
                BEGIN
                   INSERT INTO `_tabla_bitacora` (`numInventario_bi`, `tipo_bi`, `descripcion_bi`, `numSerie_bi`,
                      `resguardo_bi`, `valorAdqui_bi`, `verificado_bi`, `numTrabajador_bi`,`created_at`)
                       VALUES (OLD.numInventario,OLD.tipo,OLD.descripcion,OLD.numSerie,
                         OLD.resguardo,OLD.valorAdqui,OLD.verificado,OLD.numTrabajador, now());
                END');

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      
        DB::unprepared('DROP TRIGGER `tr_Bitacora`');
    }
}
