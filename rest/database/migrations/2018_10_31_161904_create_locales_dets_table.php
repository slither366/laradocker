<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocalesDetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locales_dets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cod_local',3);
            $table->string('cod_cia',3);
            $table->string('descripcion',100);
            $table->string('mail_local',120);
            $table->string('cod_zona',3);
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
        Schema::dropIfExists('locales_dets');
    }
}
