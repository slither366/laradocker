<?php

namespace App\Http\Controllers\Cierre;

use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;
use App\CierreTarde;
use DB;

class CierreTardeController extends ApiController
{
    /*==================================
    =            METHOD GET            =
    ==================================*/
    public function index()
    {
        $cierres = CierreTarde::all();

        return $this->showAll($cierres);
    }

    /*===================================
    =            METHOD POST            =
    ===================================*/
    public function store(Request $request)
    {
        $rules = [
            'cod_local' => 'required|size:3',
            'fec_cierre_dia_vta' => 'required',
            'fec_vb_cierre_dia' => 'required',
        ];

        $this->validate($request, $rules);
        $campos = $request->all();
        $cierres = CierreTarde::create($campos);

        return $this->showOne($cierres);
    }

    /*============================================
    =            DELETE ALL REGISTROS            =
    ============================================*/
    public function deleteAll()
    {
        CierreTarde::truncate();

        return "Datos Eliminados";
    } 
}
