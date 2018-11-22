<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LocalesDet extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cod_local',
        'cod_cia',
        'descripcion',
        'mail_local',
        'cod_zona',
    ];
}
