<?php

namespace Database\Seeders;

use App\Models\ModelPart;
use Illuminate\Database\Seeder;

class ModelPartsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ModelPart::factory()->times(30)->create();
    }
}
