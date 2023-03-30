<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
        \App\Models\ProductCategory::factory(200)->create();
        \App\Models\ProductInventory::factory(250)->create();
        \App\Models\Discount::factory(200)->create();
        \App\Models\Product::factory(100000)->create();
        \App\Models\User::factory(150)->create();
        \App\Models\UserAddress::factory(150)->create();
        \App\Models\UserPayment::factory(300)->create();
        \App\Models\ShoppingSession::factory(300)->create();
        \App\Models\CartItem::factory(610)->create();
        \App\Models\PaymentDetail::factory(500)->create();
        \App\Models\OrderDetail::factory(460)->create();
        \App\Models\OrderItem::factory(500)->create();







        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
