<?php declare(strict_types=1);

namespace HJerichen\ExampleGenericsInPhp\Entities;

class ProductEntity implements Entity
{
    public function __construct(
        private readonly int $id,
        private readonly string $vendorProductId
    ) {
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getVendorProductId(): string
    {
        return $this->vendorProductId;
    }
}
