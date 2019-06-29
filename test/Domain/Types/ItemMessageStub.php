<?php
declare(strict_types=1);

namespace MarioDevment\Linio\Test\Domain\Types;

use Faker\Factory;
use MarioDevment\Linio\Domain\Types\ItemMessage;

final class ItemMessageStub
{
    public static function create(string $message): ItemMessage
    {
        return new ItemMessage($message);
    }

    public static function random(): ItemMessage
    {
        return self::create(Factory::create()->name());
    }

    public static function withMultiple(int $index): ItemMessage
    {
        switch ($index) {
            case ($index % 3 === 0 && $index % 5 === 0):
                return self::create('Linianos');
            case ($index % 3 === 0):
                return self::create('Linio');
            case ($index % 5 === 0):
                return self::create('IT');
            default:
                return self::create((string)$index);
        }
    }
}