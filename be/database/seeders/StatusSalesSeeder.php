<?php

namespace Database\Seeders;

use App\Models\StatusSales;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusSalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $status = ['Verify', 'Verified', 'Cancelled', 'Delivering', 'Delivered'];
        foreach ($status as $name) {
            StatusSales::create(['name' => $name]);
        }
    }
}
