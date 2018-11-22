<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\User;
use Illuminate\Database\Eloquent\softDeletes;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *4
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email',50)->unique();
            $table->string('tipo_usuario',20);
            $table->string('dni',10)->unique();;
            $table->string('password');
            $table->rememberToken();
            $table->char('estado',1)->default(User::ESTADO_ACTIVO);
            $table->string('verified')->default(User::USUARIO_NO_VERIFICADO);
            $table->string('verification_token')->nullable();
            $table->string('admin')->default(User::USUARIO_REGULAR);
            $table->timestamps(); 
            $table->softDeletes();//sirve para los datos deleteados se guarden con un identificador        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
