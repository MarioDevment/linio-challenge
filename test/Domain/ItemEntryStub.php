<?php
declare(strict_types=1);

namespace MarioDevment\Linio\Test\Domain;

use MarioDevment\Linio\Domain\ItemEntry;
use MarioDevment\Linio\Domain\Types\ItemIndex;
use MarioDevment\Linio\Domain\Types\ItemMessage;
use MarioDevment\Linio\Test\Domain\Types\ItemIndexStub;
use MarioDevment\Linio\Test\Domain\Types\ItemMessageStub;

final class ItemEntryStub
{
    public static function create(ItemIndex $index, ItemMessage $message): ItemEntry
    {
        return new ItemEntry($index, $message);
    }

    public static function random(): ItemEntry
    {
        $code        = ItemIndexStub::random();
        $description = ItemMessageStub::random();

        return self::create($code, $description);
    }
}