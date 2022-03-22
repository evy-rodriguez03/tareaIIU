<?php

namespace Database\Seeders;
use App\Models\Dama;

use Illuminate\Database\Seeder;

class DamaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Dama::factory(500)->create();
    }
}

