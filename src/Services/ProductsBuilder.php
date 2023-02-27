<?php declare(strict_types=1);

namespace HJerichen\ExampleGenericsInPhp\Services;

use HJerichen\ExampleGenericsInPhp\Entities\ProductEntity;

class ProductsBuilder
{
    public function build(array $hashes): array
    {
        $products = [];
        foreach ($hashes as $hash) {
            $products[] = $this->buildForHash($hash);
        }
        return $products;
    }

    private function buildForHash(array $hash): ProductEntity
    {
        return new ProductEntity(
            id: $hash['id'],
            vendorProductId: $hash['vendorProductId'],
        );
    }
}
