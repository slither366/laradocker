<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CierreTarde extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cod_local',
        'fec_cierre_dia_vta',
        'fec_vb_cierre_dia',
        'dif_dia',
        'llave_dif',
    ];
}
