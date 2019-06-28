<?php
declare(strict_types=1);

namespace MarioDevment\Linio\Application;

use MarioDevment\Linio\Domain\ItemEntry;
use MarioDevment\Linio\Domain\Types\ItemIndex;
use MarioDevment\Linio\Domain\Types\ItemMessage;

final class instenceItem
{
    public function __invoke(int $item): ItemEntry
    {
        switch ($item) {
            case ($this->isMultipleBoth3And5($item)):
                return $this->instanceEntry($item, 'Linianos');
            case ($this->isMultiple3($item)):
                return $this->instanceEntry($item, 'Linio');
            case ($this->isMultiple5($item)):
                return $this->instanceEntry($item, 'IT');
            default:
                return $this->instanceEntry($item, (string)$item);
        }
    }

    private function instanceEntry(int $index, string $message): ItemEntry
    {
        $itemIdex    = new ItemIndex($index);
        $itemMessage = new ItemMessage($message);
        return new ItemEntry($itemIdex, $itemMessage);
    }

    private function isMultipleBoth3And5(int $item): bool
    {
        return $this->isMultiple3($item) && $this->isMultiple5($item);
    }

    private function isMultiple3(int $item): bool
    {
        return $item % 3 === 0;
    }

    private function isMultiple5(int $item): bool
    {
        return $item % 5 === 0;
    }
}