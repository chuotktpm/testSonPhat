<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoachRouteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('coachroute')->insert([
            'license_plate' => '20B-00248',
            'serial' => '137',
            'id_province' => '2',
            'price' => '90000',
        ]); 
    }
}
