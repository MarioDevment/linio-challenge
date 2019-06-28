<?php
declare(strict_types=1);

namespace MarioDevment\Linio\Domain\Types\Collections;

use JsonSerializable;
use MarioDevment\Linio\Domain\ItemEntry;

final class ItemsCollections extends CollectionInstance implements JsonSerializable
{
    public function type(): string
    {
        return ItemEntry::class;
    }

    public function jsonSerialize(): array
    {
        $data = [];
        foreach ($this as $key => $value) {
            $data[] = $this->Serializer($value);
        }
        return $data;
    }

    public function Serializer(ItemEntry $value): array
    {
        return $value->jsonSerialize();
    }
}