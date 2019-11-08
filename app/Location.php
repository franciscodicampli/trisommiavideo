<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = ['localidad'];

    public function registereds()
    {
        return $this->hasMany('App\Registered');
    }

    public function tutors()
    {
        return $this->hasMany('App\Tutor');
    }

    public function volunteers()
    {
        return $this->hasMany('App\Registered');
    }
}
