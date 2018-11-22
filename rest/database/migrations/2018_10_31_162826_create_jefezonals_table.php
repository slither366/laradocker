<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJefezonalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jefezonals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('dni_jefezona', 30);
            $table->string('nom_jefezona', 100);
            $table->string('mail_jefezona', 100);
            $table->string('dni_subgerente', 30);
            $table->string('nom_subgerente', 100);
            $table->string('mail_subgerente', 100);
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
        Schema::dropIfExists('jefezonals');
    }
}
