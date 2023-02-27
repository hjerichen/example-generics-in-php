<?php
/** @noinspection PhpUnused */
declare(strict_types=1);

namespace HJerichen\ExampleGenericsInPhp;

use HJerichen\ExampleGenericsInPhp\Services\ProductsBuilder;
use HJerichen\ExampleGenericsInPhp\Services\ProductsPrinter;

class Main
{
    public function __construct(
        private readonly ProductsBuilder $productsBuilder,
        private readonly ProductsPrinter $productsPrinter,
    ) {
    }

    public function execute(): void
    {
        $input = [
            ['id' => 1, 'vendorProductId' => 'P_1'],
            ['id' => 2, 'vendorProductId' => 'P_2'],
        ];
        $products = $this->productsBuilder->build($input);
        $this->productsPrinter->print($products);
    }
}
