<?php

namespace App\Http\Controllers\Remesas;

use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;
use App\RemesaTarde;
use DB;

class RemesaTardeController extends ApiController
{

    /*==================================
    =            METHOD GET            =
    ==================================*/
    public function index()
    {
        $data = RemesaTarde::all();

        return $this->showAll($data);
    }

    /*===================================
    =            METHOD POST            =
    ===================================*/
    public function store(Request $request)
    {

        $rules = [
            'cod_local' => 'required|size:3',
            'cod_remito' => 'required',
            'fecha_creacion_sobre' => 'required',
            'fecha_consignada' => 'required',
            'fec_crea_remito' => 'required',
            'cant_dias' => 'required',
            'dias_toca' => 'required',
            'dif_day' => 'required',
            'monto' => 'required',
            'llave_dif' => 'required',
        ];

        $this->validate($request, $rules);
        $campos = $request->all();
        $data = RemesaTarde::create($campos);

        return $this->showOne($data);
    }

    /*============================================
    =            DELETE ALL REGISTROS            =
    ============================================*/
    public function deleteAll()
    {
        RemesaTarde::truncate();

        return "true";
    }

    /*====================================================================
    =            VERIFICA SI EXISTE REMESA TARDE REGISTRADO              =
    =====================================================================*/
    public function getLlave($llave)
    {
        //$depositos = DepositoTarde::findOrFail($id);
        $depositos = DB::table('remesa_tardes')->where('llave_dif','=',$llave)->get();

        if($depositos == '[]'){
            return 'false';
        }
        else{
            return 'true';
        }
    }

}
