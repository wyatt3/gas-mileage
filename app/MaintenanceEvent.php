<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MaintenanceEvent extends Model
{
    protected $fillable = ['date', 'mileage', 'cost', 'description'];

    public function car() {
        return $this->belongsTo('App\Car');
    }
}
