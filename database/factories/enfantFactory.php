<?php

namespace Database\Factories;

use App\Models\enfant;
use Illuminate\Database\Eloquent\Factories\Factory;

class enfantFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = enfant::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'NomEnf' => $this->faker->word,
        'PostnomEnf' => $this->faker->word,
        'PrenomEnf' => $this->faker->word,
        'SexeEnf' => $this->faker->word,
        'LieuNais' => $this->faker->word,
        'Motifie' => $this->faker->word,
        'DateNais' => $this->faker->date('Y-m-d H:i:s'),
        'nomparent' => $this->faker->word,
        'idparent' => $this->faker->randomDigitNotNull,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s'),
        'deleted_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
