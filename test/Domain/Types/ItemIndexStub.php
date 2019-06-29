<?php
declare(strict_types=1);

namespace MarioDevment\Linio\Test\Domain\Types;

use Faker\Factory;
use MarioDevment\Linio\Domain\Types\ItemIndex;

final class ItemIndexStub
{
    public static function create(int $description): ItemIndex
    {
        return new ItemIndex($description);
    }

    public static function random(): ItemIndex
    {
        return self::create(Factory::create()->numberBetween(1, 100));
    }
}