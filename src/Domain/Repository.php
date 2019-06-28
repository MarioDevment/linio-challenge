<?php
declare(strict_types=1);

namespace MarioDevment\Linio\Domain;

interface Repository
{
    public function items(): array;
}