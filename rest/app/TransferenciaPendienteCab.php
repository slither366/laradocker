<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransferenciaPendienteCab extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
	  'cod_local',
	  'num_nota_es',
	  'num_guia_rem',
	  'cod_origen_nota_es',
	  'cod_destino_nota_es',
	  'fec_crea_nota_es_cab',
    ];

}
