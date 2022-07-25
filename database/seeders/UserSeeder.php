<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'admin',
            'email'=>'admin@admin.com',
            'email_verified_at' => now(),
            'password'=>bcrypt('admin'),
            'rol'=>'admin'
        ]);

        DB::table('users')->insert([
            'name'=>'points-manager01',
            'email'=>'user1@user.com',
            'email_verified_at' => now(),
            'password'=>bcrypt('user1'),
            'rol'=>'points-manager'
        ]);

        DB::table('users')->insert([
            'name'=>'user2',
            'email'=>'user2@user.com',
            'email_verified_at' => now(),
            'password'=>bcrypt('user2'),
        ]);
    }
}

