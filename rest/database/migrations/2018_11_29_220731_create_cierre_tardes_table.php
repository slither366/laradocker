<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCierreTardesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cierre_tardes', function (Blueprint $table) {
            $table->increments('id');

            $table->char('cod_local',3);
            $table->date('fec_cierre_dia_vta');
            $table->datetime('fec_vb_cierre_dia');
            $table->integer('dif_dia');
            $table->string('llave_dif',50);
            
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
        Schema::dropIfExists('cierre_tardes');
    }
}
