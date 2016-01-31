<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class Thermostat extends Model
{
    function __construct($attributes = array())
    {
      parent::__construct($attributes);
      $this->attributes = array('guid' => Uuid::uuid1()->toString());
    }

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
