<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
        //     [
        //     'name'=> 'KSI akash',
        //     'email'=> 'ksi@gmail.com',
        //     'password'=> Hash::make('1234'),
        // ]
        // [
        //      'name'=> 'Majedul Antu',
        //     'email'=> 'mantu@gmail.com',
        //     'password'=> Hash::make('1234'),
        // ], 
        [
            'name'=> 'Sabbit Kabir',
            'email'=> 'sabbirk@gmail.com',
            'password'=> Hash::make('1234'),
        ]
    );
    }
}
