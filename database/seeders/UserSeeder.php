<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();
        $user->name = "Esteban";
        $user->email = "esteban@gmail.com";
        $user->password = bcrypt('12345678');

        $user->save();

        $user = new User();
        $user->name = "Martin";
        $user->email = "martin@gmail.com";
        $user->password = bcrypt('12345678');

        $user->save();

        User::factory(8)->create();
    }
}
