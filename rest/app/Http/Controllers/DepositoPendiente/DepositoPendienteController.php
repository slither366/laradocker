<?php

namespace App\Http\Controllers\DepositoPendiente;

use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;
use App\DepositoPendiente;
use DB;

class DepositoPendienteController extends ApiController
{
    /*==================================
    =            METHOD GET            =
    ==================================*/
    public function index()
    {
        $depositos = DepositoPendiente::all();

        return $this->showAll($depositos);
    }

    /*===================================
    =            METHOD POST            =
    ===================================*/
    public function store(Request $request)
    {
        $rules = [
            'cod_local' => 'required|size:3',
            'dia_cierre' => 'required',
            'fecha_mes' => 'required',
        ];

        $this->validate($request, $rules);
        $campos = $request->all();
        $depositos = DepositoPendiente::create($campos);

        return $this->showOne($depositos);
    }

    /*============================================
    =            DELETE ALL REGISTROS            =
    ============================================*/
    public function deleteAll()
    {
        DepositoPendiente::truncate();

        return "Datos Eliminados";
    }    
}
