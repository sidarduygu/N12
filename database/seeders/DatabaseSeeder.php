<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
        \App\Models\ProductCategory::factory(20)->create();
        \App\Models\ProductInventory::factory(25)->create();
        \App\Models\Discount::factory(20)->create();
        \App\Models\Product::factory(25)->create();
        \App\Models\User::factory(15)->create();
        \App\Models\UserAddress::factory(15)->create();
        \App\Models\UserPayment::factory(30)->create();
        \App\Models\ShoppingSession::factory(30)->create();
        \App\Models\CartItem::factory(61)->create();
        \App\Models\PaymentDetail::factory(50)->create();
        \App\Models\OrderDetail::factory(46)->create();
        \App\Models\OrderItem::factory(50)->create();







        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
