<?php

namespace Database\Factories;

use App\Models\Developer;
use App\Models\Game;
use Illuminate\Database\Eloquent\Factories\Factory;

class GameFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Game::class;
    public function definition()
    {
      return [
        'title' => $this->faker->sentence(3),
        'description' => $this->faker->sentence(50),
        'date' => $this->faker->date('Y-m-d'),
        'developer_id' => Developer::get()->random()->id
      ];
    }
}
