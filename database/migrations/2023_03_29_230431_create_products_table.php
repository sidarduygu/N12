<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('sku');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('inventory_id');
            $table->unsignedBigInteger('discount_id');
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('product_categories');
            $table->foreign('inventory_id')->references('id')->on('product_inventories');
            $table->foreign('discount_id')->references('id')->on('discounts');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
