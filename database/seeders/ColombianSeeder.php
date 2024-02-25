<?php

namespace Database\Seeders;

use App\Models\Colombian;
use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
 

class ColombianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Colombian::factory(10)->create();
    }
}

