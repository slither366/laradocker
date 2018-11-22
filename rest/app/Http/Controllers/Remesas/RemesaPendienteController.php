<?php

namespace App\Http\Controllers\Remesas;

use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;
use App\RemesaPendiente;
use DB;

class RemesaPendienteController extends ApiController
{

    /*==================================
    =            METHOD GET            =
    ==================================*/
    public function index()
    {
        $data = RemesaPendiente::all();

        return $this->showAll($data);
    }

    /*===================================
    =            METHOD POST            =
    ===================================*/
    public function store(Request $request)
    {

        $rules = [
            'cod_local' => 'required|size:3',
            'fecha_creacion_sobre' => 'required',
            'fecha_consignada' => 'required',
            'cant_dias' => 'required',
            'dias_toca' => 'required',
            'dif_day' => 'required',
            'monto' => 'required',
        ];

        $this->validate($request, $rules);
        $campos = $request->all();
        $data = RemesaPendiente::create($campos);

        return $this->showOne($data);
    }

    /*============================================
    =            DELETE ALL REGISTROS            =
    ============================================*/
    public function deleteAll()
    {
        RemesaPendiente::truncate();

        return "true";
    }


}
