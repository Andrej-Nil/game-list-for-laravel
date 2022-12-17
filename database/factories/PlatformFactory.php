<?php

namespace Database\Factories;

use App\Models\Platform;
use Illuminate\Database\Eloquent\Factories\Factory;

class PlatformFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Platform::class;
    public function definition()
    {
        return [
          'title' => $this->faker->sentence(1),
          'description' => $this->faker->sentence(50)
        ];
    }
}
