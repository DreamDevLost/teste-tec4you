<?php

namespace Database\Factories;

use App\Models\Brand;
use Illuminate\Database\Eloquent\Factories\Factory;

class BrandFactory extends Factory
{
    protected $model = Brand::class;

    public function definition()
    {
        $cars = json_decode(file_get_contents(base_path('database/factories/cars.json')), true);

        return [
            'name' => $cars[mt_rand(0, 70)]['title']
        ];
    }
}
