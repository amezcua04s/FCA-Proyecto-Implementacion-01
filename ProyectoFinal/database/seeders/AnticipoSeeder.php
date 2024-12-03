<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Anticipo;

class AnticipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Anticipo::factory(10)->create();
    }
}