<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\ShoppingSession;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CartItem>
 */
class CartItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'session_id' => function () {
                return ShoppingSession::all()->random()->id;
            },
            'product_id' => function () {
                return Product::all()->random()->id;
            },
            'quantity' => $this->faker->randomNumber(2),

        ];
    }
}
