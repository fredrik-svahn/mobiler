<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "Fredrik";
        $user->email = "fredrik@orgotech.com";
        $user->password = bcrypt("password");
        $user->phone = "0720293221";
        $user->save();
    }
}
