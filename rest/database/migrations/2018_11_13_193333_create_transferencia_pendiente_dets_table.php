<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransferenciaPendienteDetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transferencia_pendiente_dets', function (Blueprint $table)
        {
            $table->increments('id');

            $table->char('cod_local',3);
            $table->char('num_nota_es',10);
            $table->integer('sec_det_nota_es');
            $table->char('cod_prod',6);
            $table->integer('cant_mov');
            $table->integer('val_frac');
            $table->datetime('fec_nota_es_det',3);
            
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
        Schema::dropIfExists('transferencia_pendiente_dets');
    }
}
