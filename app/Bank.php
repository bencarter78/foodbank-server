<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    protected $fillable = [
        'name', 'slug', 'town', 'products', 'url',
        'address', 'add1', 'add2', 'add3', 'town', 'county', 'postcode', 'latitude', 'longitude',
    ];

    public function products()
    {
        return $this->hasOne(Product::class);
    }
}
