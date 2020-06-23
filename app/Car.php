<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [];

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function gasevents() {
        return $this->hasMany('App\GasEvent');
    }

    public function maintenanceevents() {
        return $this->hasMany('App\MaintenanceEvent');
    }
}
