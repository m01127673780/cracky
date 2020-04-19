<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table    = 'products';
    protected $fillable = [

        'product_name_ar',
        'product_name_en',
        'description_ar',
        'description_en',
        'add_by_ar',
        'add_by_en',
        'add_by_photo',
        'discount',
        'price_offer',
        'price_old',
        'price',
        'photo',
        'department_id',
    ];
 
}
