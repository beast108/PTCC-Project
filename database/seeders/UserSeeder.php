<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder 
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            'email'             => 'adrianuswinsu@gmail.com',
            'password'          => \Hash::make('1234'),
            'name'              => 'Adrianus Wisnu',
        ]);

        User::insert([
            'email'             => 'affanharits@gmail.com',
            'password'          => \Hash::make('1234'),
            'name'              => 'Affan Harits'
        ]);

        User::insert([
            'email'             => 'egaerinovian@gmail.com',
            'password'          => \Hash::make('1234'),
            'name'              => 'Ega Erinovian',
        ]);

        User::insert([
            'email'             => 'mawlganz@gmail.com',
            'password'          => \Hash::make('1234'),
            'name'              => 'Maulana Irsyad'
        ]);
        
        User::insert([
            'email'             => 'naufalyzd@gmail.com',
            'password'          => \Hash::make('1234'),
            'name'              => 'Naufal Yazid'
        ]);
    }
}