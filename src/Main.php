<?php
/** @noinspection PhpUnused */
declare(strict_types=1);

namespace HJerichen\ExampleGenericsInPhp;

use HJerichen\ExampleGenericsInPhp\Entities\ProductEntity;
use HJerichen\ExampleGenericsInPhp\Services\EntityBuilder;
use HJerichen\ExampleGenericsInPhp\Services\ProductsPrinter;

class Main
{
    public function __construct(
        private readonly EntityBuilder $entityBuilder,
        private readonly ProductsPrinter $productsPrinter,
    ) {
    }

    public function execute(): void
    {
        $input = [
            ['id' => 1, 'vendorProductId' => 'P_1'],
            ['id' => 2, 'vendorProductId' => 'P_2'],
        ];
        $products = $this->entityBuilder->build(ProductEntity::class, $input);
        $this->productsPrinter->print($products);
    }
}
