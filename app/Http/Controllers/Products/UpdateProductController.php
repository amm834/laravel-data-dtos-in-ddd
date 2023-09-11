<?php

namespace App\Http\Controllers\Products;

use App\Domains\Product\DTOs\ProductData;
use App\Domains\Product\ProductService;
use App\Models\Product;

class UpdateProductController
{
    public function __construct(
        private ProductService $productService
    )
    {
    }

    public function __invoke(ProductData $request, Product $product)
    {
        $this->productService->upsert($request->toArray(), $product);
    }

}
