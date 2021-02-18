<?php

namespace Database\Factories;

use App\Models\ModelPart;
use Illuminate\Database\Eloquent\Factories\Factory;

class ModelPartFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ModelPart::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        static $i = 1;
        return [
            'model_id' => $i++,
            'name' => ['Protetor de carter', 'Filtro de òleo', 'Filtro de ac', 'òleo'][rand(0, 3)],
            'price' => rand(12, 57) / 10
        ];
    }
}
