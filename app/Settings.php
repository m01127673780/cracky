<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model {
    //

    protected $table    = 'settings';
    protected $fillable = [
        'sitename_ar',
        'sitename_en',
        'logo',
        'icon',
        'img_maintenance',
        'bg_maintenance',
        'email',
        'description',
        'keywords',
        'status',
        'message_maintenance',
        'main_lang',
    ];

}
