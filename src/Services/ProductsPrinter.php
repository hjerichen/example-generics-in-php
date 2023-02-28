<?php declare(strict_types=1);

namespace HJerichen\ExampleGenericsInPhp\Services;

use HJerichen\ExampleGenericsInPhp\Collection\EntityCollection;
use HJerichen\ExampleGenericsInPhp\Entities\ProductEntity;

class ProductsPrinter
{
    /** @param EntityCollection<ProductEntity> $products */
    public function print(EntityCollection $products): void
    {
        if ($products->isEmpty()) {
            return;
        }

        foreach ($products as $product) {
            echo "{$product->getVendorProductId()}\n";
        }

        echo implode("\n", $products->getIds());
    }
}
