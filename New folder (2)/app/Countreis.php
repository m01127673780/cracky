<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Countreis extends Model
{
     protected $table = 'countreis';
    protected $fillable = [
        'country_name_ar', 
        'country_name_en', 
        'mob', 
        'code', 
        'logo',
    ];
}