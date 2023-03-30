<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected  $guarded = [];
    protected $with = ['productCategory', 'productInventory','discount'];

    public function productCategory()
    {
        return $this->belongsTo(ProductCategory::class);
    }
    public function productInventory()
    {
        return $this->belongsTo(ProductInventory::class);
    }
    public function discount()
    {
        return $this->belongsTo(Discount::class);
    }
}
