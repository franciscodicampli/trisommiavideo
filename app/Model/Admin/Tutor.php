<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    protected $fillable = [
        'apellido',
        'nombre',
        'dni',
        'sexo',
        'fechanacimiento',
        'localidad_id',
        'direccion',
        'telefono',
        'email',
        'estadocivil',
        'ocupacion',
        'relacionconcensado',
        'obrasocial_id'
    ];


    public function localidad()
    {
        return $this->belongsTo('App\Location');
    }

    public function obrasocial()
    {
        return $this->belongsTo('App\Healthinsurance');
    }

    public function registereds()
    {
        return $this->belongsToMany('App\Registered');
    }
}
