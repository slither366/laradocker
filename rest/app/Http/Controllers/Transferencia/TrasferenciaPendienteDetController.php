<?php

namespace App\Http\Controllers\Transferencia;

use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;
use App\TransferenciaPendienteDet;
use DB;

class TrasferenciaPendienteDetController extends ApiController
{
    /*==================================
    =            METHOD GET            =
    ==================================*/
    public function index()
    {
        $depositos = TransferenciaPendienteDet::all();

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
            'sec_det_nota_es' => 'required',
            'cod_prod' => 'required|size:6',
            'cant_mov' => 'required',
            'val_frac' => 'required',
            'fec_nota_es_det' => 'required',
        ];

        $this->validate($request, $rules);
        $campos = $request->all();
        $depositos = TransferenciaPendienteDet::create($campos);

        return $this->showOne($depositos);
    }

    /*============================================
    =            DELETE ALL REGISTROS            =
    ============================================*/
    public function deleteAll()
    {
        TransferenciaPendienteDet::truncate();

        return "Datos Eliminados";
    }
}
