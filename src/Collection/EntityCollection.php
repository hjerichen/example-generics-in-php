<?php declare(strict_types=1);

namespace HJerichen\ExampleGenericsInPhp\Collection;

use HJerichen\ExampleGenericsInPhp\Entities\Entity;

/**
 * @template T of Entity
 * @template-extends Collection<T>
 */
class EntityCollection extends Collection
{
    /** @return int[] */
    public function getIds(): array
    {
        $mapping = static fn(Entity $item): int => $item->getId();
        return array_map($mapping, $this->items);
    }
}
