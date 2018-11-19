<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRemesaTardesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('remesa_tardes', function (Blueprint $table) {
            $table->increments('id');

            $table->char('cod_local',3);
            $table->string('cod_remito',10);
            $table->date('fecha_creacion_sobre');
            $table->date('fecha_consignada');
            $table->datetime('fec_crea_remito');
            $table->integer('cant_dias');
            $table->char('dias_toca',7);
            $table->integer('dif_day');
            $table->char('num_doc_ident_jefe_zona',8);
            $table->decimal('monto',8,2);
            $table->string('llave_dif',100);

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
        Schema::dropIfExists('remesa_tardes');
    }
}
