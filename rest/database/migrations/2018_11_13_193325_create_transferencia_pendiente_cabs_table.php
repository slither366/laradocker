<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransferenciaPendienteCabsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transferencia_pendiente_cabs', function (Blueprint $table) {
                $table->increments('id');

                $table->char('cod_local',3);
                $table->char('num_nota_es',10);
                $table->string('num_guia_rem',10);
                $table->char('cod_origen_nota_es',3);
                $table->char('cod_destino_nota_es',3);
                $table->datetime('fec_crea_nota_es_cab');
                
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
        Schema::dropIfExists('transferencia_pendiente_cabs');
    }
}
