<?php

namespace App\Http\Controllers\Jefezonal;

use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;
use App\Jefezonal;

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
    
}
