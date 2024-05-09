<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UpdateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = DB::table('users')->where('email_verified_at', '!=', null)->get();

        foreach ($users as $user) {
            $user->name = 'Farhan Abdul Hamid';
            $user->save();
        }
    }
}
