<?php
declare(strict_types=1);

namespace App\ApiResource;

use App\Processor\Productprocessor;
use App\Provider\ProductProvider;
use Symfony\Component\Uid\Uuid;
use ApiPlatform\Metadata\ApiResource;

#[ApiResource(
    provider: ProductProvider::class,
    processor: Productprocessor::class)
]
class Product
{
    public readonly Uuid $id;

    public function __construct(
        public string $name,
        public string $price,
        ?Uuid $id = null,
    )
    {
        $this->id = $id ?? Uuid::v4();
    }
}
