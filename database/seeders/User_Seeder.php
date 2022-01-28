<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class User_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // my code
        DB::table('users')->insert([
            'name'=>"Akash Borkar",
            'email'=>"akashborkar518@gmail.com",
            'password'=>Hash::make('akashcool')
        ]);
    }
}
