<?php

namespace App\Http\Controllers\Transferencia;

use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;
use App\TransferenciaPendienteCab;
use DB;


class TrasferenciaPendienteCabController extends ApiController
{
    /*==================================
    =            METHOD GET            =
    ==================================*/
    public function index()
    {
        $depositos = TransferenciaPendienteCab::all();

        return $this->showAll($depositos);
    }

    /*===================================
    =            METHOD POST            =
    ===================================*/
    public function store(Request $request)
    {
        $rules = [
            'cod_local' => 'required|size:3',
            'num_nota_es' => 'required|size:10',
            'num_guia_rem' => 'required',
            'cod_origen_nota_es' => 'required|size:3',
            'cod_destino_nota_es' => 'required|size:3',
            'fec_crea_nota_es_cab' => 'required',
        ];

        $this->validate($request, $rules);
        $campos = $request->all();
        $depositos = TransferenciaPendienteCab::create($campos);

        return $this->showOne($depositos);
    }

    /*============================================
    =            DELETE ALL REGISTROS            =
    ============================================*/
    public function deleteAll()
    {
        TransferenciaPendienteCab::truncate();

        return "Datos Eliminados";
    }
}
