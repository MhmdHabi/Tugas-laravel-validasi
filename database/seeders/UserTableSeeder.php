<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Zaidar Fadli Mizar',
            'email' => 'zaidar@gmail.com',
            'password' => Hash::make('password')
        ]);

        DB::table('users')->insert([
            'name' => 'Naufal Fadilah',
            'email' => 'naufal@gmail.com',
            'password' => Hash::make('password')
        ]);
    }
}
