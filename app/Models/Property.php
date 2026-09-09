<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = [
        'name',
        'type',
        'description',
        'address',
        'city',
        'latitude',
        'longitude',
        'price',
        'rating',
        'image',
        'status',
    ];
}
