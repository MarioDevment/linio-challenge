<?php
declare(strict_types=1);

namespace MarioDevment\Linio\Application;

use MarioDevment\Linio\Domain\Repository;
use MarioDevment\Linio\Domain\Types\Collections\ItemsCollections;

final class Challenge
{
    private $repository;
    private $itemsCollections;

    public function __construct(Repository $repository)
    {
        $this->repository       = $repository;
        $this->itemsCollections = [];
    }

    public function __invoke(): ItemsCollections
    {
        $items = $this->repository->items();

        foreach ($items as $item) {
            $instanceItems            = new instenceItem();
            $this->itemsCollections[] = $instanceItems($item);
        }

        return new ItemsCollections($this->itemsCollections);

    }
}