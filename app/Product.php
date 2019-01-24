<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'description',
        'code',
        'price_in_pence',
    ];

    function assets()
    {
        return $this->hasMany(Asset::class);
    }
}
