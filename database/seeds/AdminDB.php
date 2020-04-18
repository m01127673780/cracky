<?php

use Illuminate\Database\Seeder;
use App\Admin;
class AdminDB extends Seeder
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
            $add =New Admin;
            $add->name = 'admin';
            $add->email = 'admin@test.com';
            $add->password = '123456';
            $add['password'] = bcrypt('password');
            /*  $passbcrypt = */

//            dd($passbcrypt);
            $add->save();


        }

    }
}
