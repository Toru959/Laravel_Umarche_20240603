<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Stock;

class StockSeeder extends Seeder
{
    public function run()
    {
        DB::table('t_stocks')->insert([
           [
            'product_id' => 1,
            'type' => 1,
            'quantity' => 5,
           ],
           [
            'product_id' => 1,
            'type' => 1,
            'quantity' => -2,
           ],
        ]);
    }
}
