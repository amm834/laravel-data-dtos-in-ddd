<?php

namespace App\Domains\Product\DTOs;

use Spatie\LaravelData\Attributes\Validation\Max;
use Spatie\LaravelData\Attributes\Validation\StringType;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Support\Validation\ValidationContext;

class ProductData extends Data
{
    public function __construct(
        #[Max(10), StringType]
        public string $name,

        #[StringType]
        public string $description,
    )
    {
    }

}
