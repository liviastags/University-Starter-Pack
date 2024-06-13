<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * 
     */
    public function run(): void
    {
        //create a new user
        // $user = new \App\Models\User();
        // $user->name = 'Enya';
        // $user->phone = '081385514978';
        // $user->email = 'enya@gmail.com';
        // $user->password = Bcrypt ('enya12');
        // $user->save();

        //create a new user array or multiple users
        $user = [
            [
                'name' => 'Enya',
                'phone' => '081385514978',
                'email' => 'enya@gmail.com',
                'password' => bcrypt ('enya12'),
            ],
            [
                'name' => 'eming',
                'phone' => '08138564383',
                'email' => 'emingdodol@gmail.com',
                'password' => bcrypt ('mingny'),
            ]
            ];

        //insert the user into the database
        DB::table('users')->insert($user);
    }
}
