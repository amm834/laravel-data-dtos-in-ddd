<?php

namespace App\Http\Controllers\Products;

use App\Domains\Product\DTOs\ProductData;
use App\Domains\Product\ProductService;

class StoreProductController
{
    public function __construct(
        private ProductService $productService
    )
    {
    }

    public function __invoke(ProductData $productData)
    {
        $this->productService->upsert($productData->toArray());
    }
}
