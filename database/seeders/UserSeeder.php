<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                'display_name'=>'quang thiet',
                'last_name' =>'thiet',
                'first_name'=>'quang',
                'email'=>'147thiet@gmail.com',
                'number_phone'=>'0966892091',
                'gender'=>'1',
                'role'=>0,
                'avatar'=>'a',
                'address'=>'ha tinh',
                'password'=> Hash::make(1234567),
            ]
            );
    }
}
