<?php

namespace Database\Factories;

use App\Models\AuthorsBwaj;
use Illuminate\Database\Eloquent\Factories\Factory;

class AuthorsBwajFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AuthorsBwaj::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name" => $this->faker->name(),
        ];
    }
}
