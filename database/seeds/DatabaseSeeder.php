<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(App\SettingsTableSeeder::class);

//        DB::table('users')->insert([
//            'name' => 'Jeff Siebach',
//            'email' => 'jsiebach@gmail.com',
//            'password' => \Illuminate\Support\Facades\Hash::make('Anchord0wn!')
//        ]);
        DB::table('settings')->insert([
            'key'           => 'ua_code',
            'name'          => 'Google Analytics ID',
            'description'   => 'The Google Analytics Account ID for tracking.',
            'value'         => 'UA-74325208-2',
            'field'         => json_encode([
                'name' => 'value',
                'label' => 'GA ID',
                'type' => 'text',
            ]),
            'active'        => 1,
        ]);
    }
}
