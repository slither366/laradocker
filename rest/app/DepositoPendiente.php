<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DepositoPendiente extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cod_local',
        'dia_cierre',
        'fecha_mes',
    ];
}
