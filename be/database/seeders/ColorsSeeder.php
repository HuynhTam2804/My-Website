<?php

namespace Database\Seeders;

use App\Models\Colors;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ColorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $listColor = ['Gray', 'White', 'Black', 'Green', 'Red', 'Blue', 'Yellow'];
        foreach ($listColor as $color) {
            Colors::create([
                'name' => $color,
            ]);
        }
    }
}
