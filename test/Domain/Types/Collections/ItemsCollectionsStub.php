<?php
declare(strict_types=1);

namespace MarioDevment\Linio\Test\Domain\Types\Collections;

use Faker\Factory;
use MarioDevment\FCAB\Test\Organization\Domain\ItemEntryStub;
use MarioDevment\Linio\Domain\Types\Collections\ItemsCollections;

final class ItemsCollectionsStub
{
    public static function create(array $items): ItemsCollections
    {
        return new ItemsCollections($items);
    }

    public static function random(): ItemsCollections
    {
        $totalItems = Factory::create()->numberBetween(1, 10);

        $collection = [];
        for ($i = 0; $i < $totalItems; $i++) {
            $collection[] = ItemEntryStub::random();
        }

        return self::create($collection);
    }
}