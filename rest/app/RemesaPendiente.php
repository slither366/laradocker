<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RemesaPendiente extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
	    'cod_local',
	    'fecha_creacion_sobre',
	    'fecha_consignada',
	    'cant_dias',
	    'dias_toca',
	    'dif_day',
	    'num_doc_ident_jefe_zona',
	    'monto',
    ];

}
