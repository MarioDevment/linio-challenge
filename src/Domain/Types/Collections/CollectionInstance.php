<?php
declare(strict_types=1);

namespace MarioDevment\Linio\Domain\Types\Collections;

use ArrayIterator;
use Countable;
use IteratorAggregate;

abstract class CollectionInstance implements Countable, IteratorAggregate
{
    private $items;

    public function __construct(array $items)
    {
        Assert::arrayOf($this->type(), $items);
        $this->items = $items;
    }

    abstract public function type(): string;

    final public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->items());
    }

    final public function items(): array
    {
        return $this->items;
    }

    final public function count(): int
    {
        return count($this->items());
    }
}
