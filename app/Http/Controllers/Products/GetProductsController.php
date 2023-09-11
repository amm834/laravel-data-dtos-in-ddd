<?php

namespace App\Http\Controllers\Products;

use App\Domains\Product\DTOs\ProductData;
use App\Http\Controllers\Controller;

class GetProductsController extends Controller
{
    public function __invoke(ProductData $productData)
    {


        return ProductData::collection(
            collect([
                $productData,
                new ProductData('Product 1', 'Description 1'),
                new ProductData('Product 2', 'Description 2'),
                new ProductData('Product 3', 'Description 3'),
            ])
        );
    }
}
