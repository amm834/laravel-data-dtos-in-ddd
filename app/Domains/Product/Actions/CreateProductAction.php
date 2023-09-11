<?php

namespace App\Domains\Product\Actions;

use App\Domains\Product\DTOs\ProductData;
use App\Domains\Product\Exceptions\CannotCreateProduct;
use App\Domains\Product\Services\ProductService;

class CreateProductAction
{

    public function __construct(
        public readonly ProductService $productService,
    )
    {
    }

    /**
     * @throws CannotCreateProduct
     */
    public function handle(ProductData $productData): void
    {
        try {
            $this->productService->upsert($productData->toArray());
        } catch (\Exception $e) {
            throw new CannotCreateProduct("Cannot create product: {$e->getMessage()}.");
        }
    }
}
