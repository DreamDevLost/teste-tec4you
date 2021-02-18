<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class ModelFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Model::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $cars = json_decode(file_get_contents(base_path('database/factories/cars.json')), true);
        $m = $cars[mt_rand(0, 70)]['models'];
        // dd($m[1]);
        return [
            'brand_id' => rand(1, 10),
            'name' => $m[mt_rand(0, count($m) - 1)]['title']
        ];
    }
}
