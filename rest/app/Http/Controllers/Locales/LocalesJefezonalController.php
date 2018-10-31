<?php

namespace App\Http\Controllers\locales;

use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;
use App\LocalesJefezonal;

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
}
