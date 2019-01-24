<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    const TYPE_PDF = 1;
    const TYPE_IMAGE = 2;

    protected $fillable = [
        'type',
        'file_name',
        'product_id',
    ];
}
