<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RemesaTarde extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
	    'cod_local',
	    'cod_remito',
	    'fecha_creacion_sobre',
	    'fecha_consignada',
	    'fec_crea_remito',
	    'cant_dias',
	    'dias_toca',
	    'dif_day',
	    'num_doc_ident_jefe_zona',
	    'monto',
	    'llave_dif',
    ];

}
