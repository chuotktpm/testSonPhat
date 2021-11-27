<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookTicketSeeder extends Seeder
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
               'userID'=>'2',
               'provinceID'=>'4',
               'namecustomer'=> 'Nguyễn Thành Quang',
               'phonecustomer'=> '0987654321',
            ),
            array(
                'userID'=>null,
                'provinceID'=>null,
                'namecustomer'=>null,
                'phonecustomer'=>null,
            ),
        );
  
        DB::table('bookticket')->insert($data);
    }
}
