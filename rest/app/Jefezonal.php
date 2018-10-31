<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jefezonal extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'dni_jefezona',
        'nom_jefezona',
        'mail_jefezona',
        'dni_subgerente',
        'nom_subgerente',
        'mail_subgerente',
    ];
}
