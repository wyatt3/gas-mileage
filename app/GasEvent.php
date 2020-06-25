<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GasEvent extends Model
{
    protected $fillable = ['car_id', 'date', 'trip_miles', 'mileage', 'gallons', 'price_per_gallon', 'total', 'gas_mileage'];

    public function car() {
        return $this->belongsTo('App\Car');
    }
}
