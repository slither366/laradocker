<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransferenciaPendienteDet extends Model
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
	    'cod_local',
	    'num_nota_es',
	    'sec_det_nota_es',
	    'cod_prod',
	    'cant_mov',
	    'val_frac',
	    'fec_nota_es_det',
    ];

}
