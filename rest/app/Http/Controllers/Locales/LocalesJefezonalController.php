<?php

namespace App\Http\Controllers\locales;

use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;
use App\LocalesJefezonal;
use DB;

class LocalesJefezonalController extends ApiController
{
    /*==================================
    =            METHOD GET            =
    ==================================*/
    public function index()
    {
        $data = LocalesJefezonal::all();

        return $this->showAll($data);
    }

    /*===================================
    =            METHOD POST            =
    ===================================*/
    public function store(Request $request)
    {
        $rules = [          
            'cod_local' => 'required|size:3',
            'dni_jefe_zona' => 'required|size:8',
        ];

        $this->validate($request, $rules);
        $campos = $request->all();
        $data = LocalesJefezonal::create($campos);

        return $this->showOne($data);
    }

    /*============================================
    =            DELETE ALL REGISTROS            =
    ============================================*/
    public function deleteAll()
    {
        LocalesJefezonal::truncate();

        return "true";
    }

    /*======================================================
    =            GET Revis si JefexLocal Existe            =
    ======================================================*/
    public function getJefexlocalExiste($cod_local)
    {

        $query = DB::table('locales_jefezonals')->where('cod_local','=',$cod_local)->get();

        if($query == '[]'){
            return 'false';
        }
        else{
            return 'true';
        }

    }       

}
