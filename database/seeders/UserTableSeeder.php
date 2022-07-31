<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users') ->insert([
            'username'=>'nhatanh',
            'email'=>'nnhatanh0804@gmail.com',
            'password'=>Hash::make('123'),
            'role'=>'admin'
        ]);
    }
}
