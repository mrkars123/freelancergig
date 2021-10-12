<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $userData = [
            [
               'username'=>'Admin',
               'email'=>'johndoe@hotmail.com',
               'password'=> bcrypt('07070707'),
            ],
            [
               'username'=>'Regular User',
               'email'=>'reguser@gmail.com',
               'password'=> bcrypt('07070707'),
            ],
        ];
  
        User::insert($userData);
    }
    
}