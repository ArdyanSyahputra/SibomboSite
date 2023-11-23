<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    DB::table('users')->insert(array(
        [
        'nama'=>'Amel',
        'username'=>'Admin1',
        'email'=>'Amel@gmail.com',
        'password'=>bcrypt('Admin1234'),
        'level'=>'2',
        'status'=>'Admin'
        ]
    ));
    }
}
