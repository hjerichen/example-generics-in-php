<?php declare(strict_types=1);

namespace HJerichen\ExampleGenericsInPhp\Services;

class ProductsPrinter
{
    public function print(array $products): void
    {
        foreach ($products as $product) {
            echo "{$product->getVendorProductId()}\n";
        }
    }
}
