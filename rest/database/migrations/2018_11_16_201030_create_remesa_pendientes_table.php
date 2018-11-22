<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRemesaPendientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('remesa_pendientes', function (Blueprint $table) {
            $table->increments('id');

            $table->char('cod_local',3);
            $table->date('fecha_creacion_sobre');
            $table->date('fecha_consignada');
            $table->integer('cant_dias');
            $table->char('dias_toca',7);
            $table->integer('dif_day');
            $table->char('num_doc_ident_jefe_zona',8);
            $table->decimal('monto',8,2);

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
        Schema::dropIfExists('remesa_pendientes');
    }
}
