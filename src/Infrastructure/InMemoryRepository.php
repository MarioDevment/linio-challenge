<?php
declare(strict_types=1);

namespace MarioDevment\Linio\Infrastructure;

use MarioDevment\Linio\Domain\Repository;

class InMemoryRepository implements Repository
{
    private const MAX_ITEMS = 100;
    private $result = [];

    public function __construct()
    {
        $this->result = [];
    }

    public function items(): array
    {
        for ($index = 1; $index <= self::MAX_ITEMS; $index++) {
            $this->result[] = $index;
        }
        return $this->result;
    }
}