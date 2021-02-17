<?php

use App\Models\Brand;
use Illuminate\Database\Eloquent\Factories\Factory;

class BrandFactory extends Factory
{
    protected $model = Brand::class;

    public function definition()
    {
        $this->faker->addProvider(new \Faker\Provider\CarData($this->faker));

        return [
            'name' => $this->faker->vehicleBrand
        ];
    }
}
