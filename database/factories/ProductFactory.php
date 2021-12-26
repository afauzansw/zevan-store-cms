<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'type' => $this->faker->creditCardNumber,
            'slug' => $this->faker->slug,
            'description' => $this->faker->realText,
            'price' => $this->faker->randomNumber(5),
            'quantity' => $this->faker->randomNumber(3),
        ];
    }
}
