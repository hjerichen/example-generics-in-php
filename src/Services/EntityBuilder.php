<?php
/** @noinspection PhpDocMissingThrowsInspection */
/** @noinspection PhpUnhandledExceptionInspection */
declare(strict_types=1);

namespace HJerichen\ExampleGenericsInPhp\Services;

use HJerichen\ExampleGenericsInPhp\Entities\Entity;
use ReflectionClass;

class EntityBuilder
{
    /**
     * @template T of Entity
     * @param class-string<T> $class
     * @param array[] $hashes
     * @return T[]
     */
    public function build(string $class, array $hashes): array
    {
        $entities = [];
        foreach ($hashes as $hash) {
            $entities[] = $this->buildForHash($class, $hash);
        }
        return $entities;
    }

    /**
     * @template T of Entity
     * @param class-string<T> $class
     * @param array $hash
     * @return T
     */
    protected function buildForHash(string $class, array $hash): Entity {
        return (new ReflectionClass($class))->newInstance($hash);
    }
}
