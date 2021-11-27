<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('province')->insert([
            'nameprovince' => 'Thái Bình',
        ]);      
        DB::table('province')->insert([
            'nameprovince' => 'Hà Nội',
        ]);
        DB::table('province')->insert([
            'nameprovince' => 'Bắc Giang',
        ]);
        DB::table('province')->insert([
            'nameprovince' => 'Cao Bằng',
        ]);
        DB::table('province')->insert([
            'nameprovince' => 'Lạng Sơn',
        ]);
        DB::table('province')->insert([
            'nameprovince' => 'Hải Phòng',
        ]);
        DB::table('province')->insert([
            'nameprovince' => 'Bắc Kạn',
        ]);
    }
}
