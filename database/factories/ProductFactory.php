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
    $categoryIds = ProductCategory::pluck('id')->toArray();
    $inventoryIds = ProductInventory::pluck('id')->toArray();
    $discountIds = Discount::pluck('id')->toArray();

    return [
        'name' => $this->faker->firstName(),
        'sku' => $this->faker->randomNumber(),
        'category_id' => $this->faker->randomElement($categoryIds),
        'inventory_id' => $this->faker->randomElement($inventoryIds),
        'discount_id' => $this->faker->randomElement($discountIds),
    ];
}

}
