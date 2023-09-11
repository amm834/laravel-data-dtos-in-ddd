<?php

namespace App\Domains\Product\Services;

use App\Domains\Product\DTOs\ProductData;
use App\Models\Product;

class ProductService
{
    public function getAll()
    {
        return Product::all();
    }

    public function upsert(array $data, ?Product $product = null): Product
    {
        return Product::updateOrCreate([
            'id' => $product?->id
        ], $data);
    }
}
