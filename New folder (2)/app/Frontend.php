<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Frontend extends Model
{
    protected $table    = 'frontends';
    protected $fillable = [
        'logo',
        'icon',
        'img_larg',
        'img_insid',
        'section_three_img_one',
        'section_three_img_two',
        'section_three_img_three',
        'section_tow_img_one',
        'section_tow_img_two',
        'section_footer_about_ar',
        'section_footer_about_en',
        'section_footer_img_about',
        'section_footer_img_payment_methods',
        'section_footer_address_ar',
        'section_footer_address_en',
        'section_footer_phone',
        'section_footer_email',
        'facebook',
        'twitter',
        'instagram',
        'gmail',
        'section_footer_sen_message',
        'section_footer_sen_email',
        'section_footer_payment_methods',    ];
 
}
