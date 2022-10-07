<?php

namespace Database\Factories;

use App\Models\parent;
use Illuminate\Database\Eloquent\Factories\Factory;

class parentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = parent::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'NomPar' => $this->faker->word,
        'PostnomPar' => $this->faker->word,
        'PrenomPar' => $this->faker->word,
        'AdressePar' => $this->faker->word
        ];
    }
}
