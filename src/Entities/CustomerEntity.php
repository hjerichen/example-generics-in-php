<?php declare(strict_types=1);

namespace HJerichen\ExampleGenericsInPhp\Entities;

class CustomerEntity implements Entity
{
    public function __construct(
        private readonly int $id,
        private readonly string $name,
    ) {
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
