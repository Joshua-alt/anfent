<?php

namespace Database\Factories;

use App\Models\agent;
use Illuminate\Database\Eloquent\Factories\Factory;

class agentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = agent::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
        'email' => $this->faker->word,
        'fonction' => $this->faker->word,
        'email_verified_at' => $this->faker->date('Y-m-d H:i:s'),
        'password' => $this->faker->word,
        'two_factor_secret' => $this->faker->text,
        'two_factor_recovery_codes' => $this->faker->text,
        'remember_token' => $this->faker->word,
        'current_team_id' => $this->faker->word,
        'profile_photo_path' => $this->faker->text,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s'),
        'deleted_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
