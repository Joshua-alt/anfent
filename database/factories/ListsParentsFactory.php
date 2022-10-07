<?php

namespace Database\Factories;

use App\Models\ListsParents;
use Illuminate\Database\Eloquent\Factories\Factory;

class ListsParentsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ListsParents::class;

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
        'AdressePar' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s'),
        'deleted_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
