<?php
declare(strict_types=1);

namespace MarioDevment\Linio\Domain\Types;

final class ItemMessage
{
    private $message;

    public function __construct(string $message)
    {
        $this->message = $message;
    }

    public static function create(string $message): ItemMessage
    {
        return new self($message);
    }

    public function value(): string
    {
        return $this->message;
    }
}