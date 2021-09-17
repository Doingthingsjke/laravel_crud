<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    protected $fillable = [
        'model', 'car_id', 'engine_power', 'year_released'
    ];

    public function car()
    {
        return $this->belongsTo(Car::class);
    }
}
