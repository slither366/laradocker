<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CierrePendiente extends Model
{
	
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cod_local',
        'fecha_mes',
    ];

}
