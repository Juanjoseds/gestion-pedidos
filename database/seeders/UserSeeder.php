<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
            'name' => 'Cliente',
            'lastname' => 'Díaz',
            'email' => 'cliente@gmail.com',
            'company' => false,
            'dni' => '42222332D',
            'location' => 'C/ Mesa y López, 15',
            'password' => Hash::make('123123123'),
        ]);
        DB::table('users')->insert([
            'name' => 'Tienda',
            'lastname' => 'Bazar',
            'email' => 'tienda@gmail.com',
            'company' => true,
            'dni' => '48888888D',
            'location' => 'C/ Tienda, 28',
            'password' => Hash::make('123123123'),
        ]);
    }
}
