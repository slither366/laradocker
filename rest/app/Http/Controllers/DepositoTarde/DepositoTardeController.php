<?php

namespace App\Http\Controllers\DepositoTarde;

use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;
use App\DepositoTarde;
use DB;

class DepositoTardeController extends ApiController
{

    /*==================================
    =            METHOD GET            =
    ==================================*/
    public function index()
    {
        $depositos = DepositoTarde::all();

        return $this->showAll($depositos);
    }

    /*===================================
    =            METHOD POST            =
    ===================================*/
    public function store(Request $request)
    {
        $rules = [
            'cod_local' => 'required|size:3',
            'mes_periodo' => 'required|digits:2',
            'ano_periodo' => 'required|digits:4',
            'dia_cierre' => 'required',
            'fecha_cierre_dia' => 'required',
            'fecha_cuadratura_cierre_dia' => 'required',
            'dia_op_banc' => 'required',
            'fecha_op_bancaria' => 'required',
            'dif_min' => 'required',//numeric
            'cant_dias' => 'required',
            'moneda' => 'required',
            'monto_deposito' => 'required',//numeric
            'num_operacion' => 'required',//numeric
            'usuario' => 'required',
            'mon_tot_perdido' => 'required',
            'estado_cuadratura' => 'required',
            'llave_dif' => 'required',
        ];

        $this->validate($request, $rules);
        $campos = $request->all();
        $depositos = DepositoTarde::create($campos);

        //return response()->json(['data' => $usuario], 201);
        return $this->showOne($depositos);
    }

    /*====================================================================
    =            VERIFICA SI EXISTE DEPOSITO TARDE REGISTRADO            =
    ====================================================================*/
    public function getLlave($llave)
    {
        //$depositos = DepositoTarde::findOrFail($id);
        $depositos = DB::table('deposito_tardes')->where('llave_dif','=',$llave)->get();

        if($depositos == '[]'){
            return 'false';
        }
        else{
            return 'true';
        }
    }

    /*============================================
    =            DELETE ALL REGISTROS            =
    ============================================*/
    public function deleteAll()
    {
        DepositoTarde::truncate();

        return "true";
    }    

}
