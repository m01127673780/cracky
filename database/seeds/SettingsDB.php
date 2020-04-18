<?php

use Illuminate\Database\Seeder;
use App\Settings;
class SettingsDB extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                for ($i =0; $i < 1; $i++)
        {
            $add =New Settings;
            $add->sitename_ar = 'sitename_ar';
            $add->sitename_en = 'sitename_en';
            $add->logo = 'logo.png';
            $add->icon = 'icon.png';
            $add->email = 'email@email.com';
            $add->description = 'description';
            $add->keywords = 'keywords';
            $add->status = 'open';
            $add->message_maintenance = 'message_maintenance';
            $add->img_maintenance = 'img_maintenance.png';
            $add->bg_maintenance = 'bg_maintenance.png';
            $add->main_lang = 'ar';
            $add->save();


        }
    }
}
