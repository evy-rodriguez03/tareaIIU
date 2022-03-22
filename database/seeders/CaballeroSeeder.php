<?php

namespace Database\Seeders;
use App\Models\Caballero;

use Illuminate\Database\Seeder;

class CaballeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Caballero::factory(500)->create();
    }
}
