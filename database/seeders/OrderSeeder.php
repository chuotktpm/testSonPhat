<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            array(
               'userID'=>'3',
               'coachrouteID'=>'1',
               'chainTicketID'=> '23-24',
            ),
        );
  
        DB::table('order')->insert($data);
    }
}
