<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Add a record with Eloquent ORM 
        $user = new User;
        $user->document = 75000001;
        $user->fullname = "Jeremias Springfield";
        $user->gender = "male";
        $user->birthdate = "1987-03-09";
        $user->photo = "jeremias.png";
        $user->phone = 312000001;
        $user->email ="jeremias@gamil.com";
        $user->password = bcrypt('admin');
        $user->role = "Admin";

        $user->save();

        //Add a record with Array 
        DB:: table('users')->insert([
            'document' => 1060647457,
            'fullname' => 'William McDougal',
            'gender' => 'male',
            'birthdate' => '1987-05-09',
            'photo' => '1709303076.jfif',
            'phone' =>  3002346547,
            'email' => 'william@gmail.com',
            'password' => bcrypt('12345'),


        ]

        );
}
}
