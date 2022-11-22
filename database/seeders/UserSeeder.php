<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => 1,
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('11111111'),
            'role' => 'admin'
        ]);

        DB::table('users')->insert([
            'id' => 2,
            'name' => 'Manager',
            'email' => 'manager@gmail.com',
            'password' => bcrypt('11111111'),
            'role' => 'manager'
        ]);

        DB::table('users')->insert([
            'id' => 3,
            'name' => 'User',
            'email' => 'user@gmail.com',
            'password' => bcrypt('11111111'),
            'role' => 'user'
        ]);
    }
}
