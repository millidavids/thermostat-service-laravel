<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thermostat extends Model
{
    protected $fillable = [
        'name'
    ];

    public function user()
    {
      return $this->belongsTo('App/User');
    }

    public function readings()
    {
      return $this->hadMany('App/ThermostatReading');
    }
}
