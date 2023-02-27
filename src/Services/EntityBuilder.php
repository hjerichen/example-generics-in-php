<?php declare(strict_types=1);

namespace HJerichen\ExampleGenericsInPhp\Services;

use HJerichen\ExampleGenericsInPhp\Entities\Entity;

/**
 * @template TType of Entity
 * @template THash of array
 */
abstract class EntityBuilder
{
    /**
     * @param THash[] $hashes
     * @return TType[]
     */
    public function build(array $hashes): array
    {
        $entities = [];
        foreach ($hashes as $hash) {
            $entities[] = $this->buildForHash($hash);
        }
        return $entities;
    }

    /**
     * @param THash $hash
     * @return TType
     */
    abstract protected function buildForHash($hash): Entity;
}
