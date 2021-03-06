<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InvoiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('invoice')->insert([
            'user_id' => 1,
            'order_id' => 1,
            'paid_amount' => 1000
        ]);
         DB::table('invoice')->insert([
            'user_id' => 3,
            'order_id' => 2,
            'paid_amount' => 4000
        ]);
          DB::table('invoice')->insert([
            'user_id' => 4,
            'order_id' => 4,
            'paid_amount' => 1000
        ]);
           DB::table('invoice')->insert([
            'user_id' => 5,
            'order_id' => 5,
            'paid_amount' => 1000
        ]);
            DB::table('invoice')->insert([
            'user_id' => 2,
            'order_id' => 3,
            'paid_amount' => 1000
        ]);
    }
}
