<?php

namespace App\Http\Controllers\Jefezonal;

use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;
use App\Jefezonal;
use DB;

class JefezonalController extends ApiController
{

    /*==================================
    =            METHOD GET            =
    ==================================*/
    public function index()
    {
        $jefes = Jefezonal::all();

        return $this->showAll($jefes);
    }

    /*===================================
    =            METHOD POST            =
    ===================================*/
    public function store(Request $request)
    {
        $rules = [
            'dni_jefezona' => 'required|size:8',
            'nom_jefezona' => 'required',
            'dni_subgerente' => 'required|size:8',
            'nom_subgerente' => 'required',
        ];

        $this->validate($request, $rules);
        $campos = $request->all();
        $jefes = Jefezonal::create($campos);

        //return response()->json(['data' => $usuario], 201);
        return $this->showOne($jefes);
    }

    /*============================================
    =            DELETE ALL REGISTROS            =
    ============================================*/
    public function deleteAll()
    {
        Jefezonal::truncate();

        return "true";
    }

    /*=========================================================
    =            GET Verifica si Jefe Zonal Existe            =
    =========================================================*/
    public function getJefeExiste($dni_jefezona)
    {
        $query = DB::table('jefezonals')->where('dni_jefezona','=',$dni_jefezona)->get();

        if($query == '[]'){
            return 'false';
        }
        else{
            return 'true';
        }
    }
    
}
