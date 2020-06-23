<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MaintenanceEvent extends Model
{
    protected $fillable = [];

    public function car() {
        return $this->belongsTo('App\Car');
    }
}
