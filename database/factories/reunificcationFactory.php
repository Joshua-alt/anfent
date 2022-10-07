<?php

namespace Database\Factories;

use App\Models\reunificcation;
use Illuminate\Database\Eloquent\Factories\Factory;

class reunificcationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = reunificcation::class;

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
        'temoin' => $this->faker->word,
        'Autorite' => $this->faker->word,
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
