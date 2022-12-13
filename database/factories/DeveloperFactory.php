<?php

namespace Database\Factories;

use App\Models\Developer;
use Illuminate\Database\Eloquent\Factories\Factory;

class DeveloperFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array
   */
  protected $model = Developer::class;

  public function definition()
  {
    return [
      'title' => $this->faker->sentence(3),
      'description' => $this->faker->sentence(50)
    ];
  }
}
