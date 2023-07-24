<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
            'name' => 'Tạ Văn Định',
            'email' => 'dinhtv7@fpt.edu.vn',
            'phone_number' => '0987654321',
            'cccd' => '001203015381',
            'address' => 'Nam Định',
            'gender' => 1
        ]);
    }
}
