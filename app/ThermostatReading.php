<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ThermostatReading extends Model
{
    protected $fillable = [
        'temperature',
        'humidity'
    ];

    public function thermostat()
    {
      return $this->belongsTo('App\Thermostat');
    }
}
