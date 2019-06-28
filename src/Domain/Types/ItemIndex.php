<?php
declare(strict_types=1);

namespace MarioDevment\Linio\Domain\Types;

final class ItemIndex
{
    private $id;

    public function __construct(int $id)
    {
        $this->id = $id;
    }

    public static function create(int $id): ItemIndex
    {
        return new self($id);
    }

    public function value(): int
    {
        return $this->id;
    }
}