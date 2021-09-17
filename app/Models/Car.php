<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'brand', 'country', 'logo', 'website'
    ];

    public function carModels()
    {
        return $this->hasMany(CarModel::class, 'car_id');
    }
}
