<?php

namespace App\Http\Controllers\locales;

use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;
use App\LocalesDet;
use DB;

class LocalesDetController extends ApiController
{

    /*==================================
    =            METHOD GET            =
    ==================================*/
    public function index()
    {
        $data = LocalesDet::all();

        return $this->showAll($data);
    }

    /*===================================
    =            METHOD POST            =
    ===================================*/
    public function store(Request $request)
    {
        $rules = [          
            'cod_local' => 'required|size:3',
            'cod_cia' => 'required|size:3',
            'cod_zona' => 'required',
        ];

        $this->validate($request, $rules);
        $campos = $request->all();
        $data = LocalesDet::create($campos);

        return $this->showOne($data);
    }

    /*============================================
    =            DELETE ALL REGISTROS            =
    ============================================*/
    public function deleteAll()
    {
        LocalesDet::truncate();

        return "true";
    }

    /*==================================================
    =            GET Revisa Si Local Existe            =
    ==================================================*/
    public function getLocalExiste($cod_local)
    {
        //$depositos = DepositoTarde::findOrFail($id);
        $query = DB::table('locales_dets')->where('cod_local','=',$cod_local)->get();

        if($query == '[]'){
            return 'false';
        }
        else{
            return 'true';
        }
    }    

}
