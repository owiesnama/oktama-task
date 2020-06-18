<?php

use October\Rain\Database\Updates\Seeder as BaseSeeder;
use RainLab\User\Facades\Auth;

class Seeder extends BaseSeeder
{
    public function run()
    {
        $user = Auth::register([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => 'password',
            'password_confirmation' => 'password',
            'permision' => 'admin'
        ],true);
    }
}