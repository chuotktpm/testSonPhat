<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoachInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('coachinfo')->insert([
            'license_plate' => '20B-00115',
            'number_seats' => '30',
            'number_beds' => '0',
            'cargo_per_customer' => '15kg',
            'name' => 'Công ty CPVT Thái Nguyên',
            'phone' => '0343888573',
            'timestart' => '01:00:00',
        ]); 
    }
}
