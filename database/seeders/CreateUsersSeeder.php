<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Model\Users;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
               'name'=>'Nguyễn Thái Bảo 2',
               'email'=>'bao2@gmail.com',
               'password'=> bcrypt('pykachutn1'),
            ],
        ];
  
        DB::table('users')->insert($user);
    }
}
