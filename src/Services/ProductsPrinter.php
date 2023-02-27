<?php declare(strict_types=1);

namespace HJerichen\ExampleGenericsInPhp\Services;

use HJerichen\ExampleGenericsInPhp\Entities\ProductEntity;

class ProductsPrinter
{
    /** @param ProductEntity[] $products */
    public function print(array $products): void
    {
        foreach ($products as $product) {
            echo "{$product->getVendorProductId()}\n";
        }
    }
}
