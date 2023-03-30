<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Discount;
use App\Models\ProductCategory;
use App\Models\ProductInventory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->firstName(),
            'sku' => $this->faker->randomNumber(),
            'category_id' => function () {
                return ProductCategory::all()->random()->id;
            },
            'inventory_id' => function () {
                return ProductInventory::all()->random()->id;
            },
            'discount_id' => function () {
                return Discount::all()->random()->id;
            },
        ];
    }
}
