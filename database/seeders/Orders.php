<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Orders extends Seeder
{
    public function run(): void
    {
        DB::table('orders')->insert([
            [
                'user_id' => 3, // Customer Biasa
                'address' => 'Jalan Air Bersih No. 27',
                'total_harga' => 40000,
                'status' => 'pending',
                'created_at' => now(), 'updated_at' => now(),
            ]
        ]);
    }
}
