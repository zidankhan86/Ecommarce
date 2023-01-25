<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
   
    {

       User::create([


        'name'=>'Admin',
        'email'=>'admin@gmail.com',
        'password'=>bcrypt('12345'),
        'address'=>'Uttara',
        'role'=>'admin',
        'phone'=>'01776718178'
       ]);

    }
}
