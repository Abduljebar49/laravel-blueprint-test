<?php

namespace Database\Seeders;

use App\Models\ContanctInfo;
use Illuminate\Database\Seeder;

class ContanctInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ContanctInfo::factory()->count(5)->create();
    }
}
