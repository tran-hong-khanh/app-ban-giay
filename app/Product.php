<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
    protected $fillable = [
        'catalog_id',
        'name',
        'price',
        'image_link',
    ];
}
