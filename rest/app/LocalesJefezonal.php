<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LocalesJefezonal extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cod_local',
        'dni_jefe_zona',
    ];
}
