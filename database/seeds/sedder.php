<?php

use Illuminate\Database\Seeder;
use App\User;
use Carbon\Carbon;
class sedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      User::truncate();

        $users =  [
            [
              'username' => 'admin',
              'email' => 'admin@gmail.com',
              'type' => 'admin',
              'password'=> bcrypt('07070707'),
              'email_verified_at' => Carbon::now(),
              'created_at' => Carbon::now(),
              'updated_at' => Carbon::now(),
              'status' => 2,
            ],
            [
              'username' => 'seller',
              'email' => 'seller@gmail.com',
              'type' => 'seller',
              'password'=> bcrypt('07070707'),
              'email_verified_at' => Carbon::now(),
              'created_at' => Carbon::now(),
              'updated_at' => Carbon::now(),
              'status' => 1,
            ],
            [
              'username' => 'buyer',
              'email' => 'buyer@gmail.com',
              'type' => 'buyer',
              'password'=> bcrypt('07070707'),
              'email_verified_at' => Carbon::now(),
              'created_at' => Carbon::now(),
              'updated_at' => Carbon::now(),
              'status' => 1,
            ],
          ];

          User::insert($users);

    }
}
