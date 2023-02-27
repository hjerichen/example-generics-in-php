<?php declare(strict_types=1);

namespace HJerichen\ExampleGenericsInPhp\Services;

use HJerichen\ExampleGenericsInPhp\Entities\ProductEntity;

/** @template-extends EntityBuilder<ProductEntity, array{id: int, vendorProductId: string}> */
class ProductsBuilder extends EntityBuilder
{
    protected function buildForHash($hash): ProductEntity
    {
        return new ProductEntity(
            id: $hash['id'],
            vendorProductId: $hash['vendorProductId'],
        );
    }
}
