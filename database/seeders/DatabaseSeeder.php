<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\ItemsTableSeeder;
use Database\Seeders\InvoiceTableSeeder;
use Database\Seeders\OrderTableSeeder;
use Database\Seeders\UserTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(InvoiceTableSeeder::class);
        $this->call(OrderTableSeeder::class);
        $this->call(ItemsTableSeeder::class);
        $this->call(UserTableSeeder::class);

    }
}
