<?php

namespace App\Http\Controllers\Products;

use App\Domains\Product\Actions\CreateProductAction;
use App\Domains\Product\DTOs\ProductData;
use App\Domains\Product\Exceptions\CannotCreateProduct;
use App\Domains\Product\Services\ProductService;

class StoreProductController
{
    public function __invoke(ProductData $productData, CreateProductAction $createProductAction)
    {
        try {
            $createProductAction->handle($productData);

            return response()->json([
                'message' => 'Product created successfully'
            ], 201);
        } catch (CannotCreateProduct $e) {
            return response()->json([
                'message' => $e->getMessage()
            ], 400);
        }
    }
}
