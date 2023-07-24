<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('oder_detail')->insert([
            'tenSP' => 'Anh123',
            'mau' => 'Den',
            'tenKhachHang' => 'Hoàng Minh Anh',
            'phone_number' => '036679195',
            'address' => 'Chương Mỹ',
            'ngayLapHoaDon' => '22 - 10 - 2023',
            'price' => '20000000'
        ]);
    }
}
