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
                'name'=>'Đặng Quang Thiết',
                'email'=>'147thiet@gmail.com',
                'number_phone'=>'0966892091',
                'gender'=>'1',
                'avatar'=>'a',
                'password'=> Hash::make(1234567),
            ]
            );
    }
}
