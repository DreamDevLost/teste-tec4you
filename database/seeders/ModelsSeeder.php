<?php

namespace Database\Seeders;

use App\Models\Model as ModelsModel;
use Illuminate\Database\Seeder;

class ModelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ModelsModel::factory()->times(30)->create();
    }
}
