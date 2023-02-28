<?php declare(strict_types=1);

namespace HJerichen\ExampleGenericsInPhp\Collection;

use ArrayAccess;
use ArrayIterator;
use Countable;
use IteratorAggregate;
use Traversable;

/**
 * @template T
 * @template-implements IteratorAggregate<array-key,T>
 * @template-implements ArrayAccess<array-key,T>
 */
class Collection implements IteratorAggregate, ArrayAccess, Countable
{
    /** @param T[] $items */
    public function __construct(
        protected array $items = []
    ) {
    }

    /** @return Traversable<array-key,T> */
    public function getIterator(): Traversable
    {
        return new ArrayIterator($this->items);
    }

    /** @param array-key $offset */
    public function offsetExists(mixed $offset): bool
    {
        return isset($this->items[$offset]);
    }

    /**
     * @param array-key $offset
     * @return T|null
     */
    public function offsetGet(mixed $offset): mixed
    {
        return $this->items[$offset] ?? null;
    }

    /**
     * @param array-key|null $offset
     * @param T $value
     */
    public function offsetSet(mixed $offset, mixed $value): void
    {
        $offset !== null ? $this->items[$offset] = $value : $this->items[] = $value;
    }

    public function offsetUnset(mixed $offset): void
    {
        unset($this->items[$offset]);
    }

    public function count(): int
    {
        return count($this->items);
    }

    public function isEmpty(): bool
    {
        return $this->count() === 0;
    }
}
