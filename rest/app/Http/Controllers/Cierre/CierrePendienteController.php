<?php

namespace App\Http\Controllers\Cierre;

use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;
use App\CierrePendiente;
use DB;

class CierrePendienteController extends ApiController
{
    /*==================================
    =            METHOD GET            =
    ==================================*/
    public function index()
    {
        $cierres = CierrePendiente::all();

        return $this->showAll($cierres);
    }

    /*===================================
    =            METHOD POST            =
    ===================================*/
    public function store(Request $request)
    {
        $rules = [
            'cod_local' => 'required|size:3',
            'fecha_mes' => 'required',
        ];

        $this->validate($request, $rules);
        $campos = $request->all();
        $cierres = CierrePendiente::create($campos);

        return $this->showOne($cierres);
    }

    /*============================================
    =            DELETE ALL REGISTROS            =
    ============================================*/
    public function deleteAll()
    {
        CierrePendiente::truncate();

        return "Datos Eliminados";
    } 
}
