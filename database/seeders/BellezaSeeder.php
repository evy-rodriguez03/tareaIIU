<?php

namespace Database\Seeders;

use App\Models\Belleza;
use Illuminate\Database\Seeder;

class BellezaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Belleza::factory(500)->create();
    }
}
