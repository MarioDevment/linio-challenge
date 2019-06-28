<?php
declare(strict_types=1);

namespace MarioDevment\Linio;

final class Challenge
{
    private const MULTIPLES_OF_3 = 3;
    private const MULTIPLES_OF_5 = 5;
    private const MAX_ITEMS      = 100;

    private $result;

    public function __construct()
    {
        $this->result = [];
    }

    public function __invoke(): array
    {
        for ($index = 1; $index <= self::MAX_ITEMS; $index++) {
            switch ($index) {
                case ($this->isMultipleBoth3and5($index)):
                    $this->result[] = "Linianos";
                    break;
                case ($this->isMultipleOf($index, self::MULTIPLES_OF_3)):
                    $this->result[] = "Linio";
                    break;
                case ($this->isMultipleOf($index, self::MULTIPLES_OF_5)):
                    $this->result[] = "IT";
                    break;
                default:
                    $this->result[] = $index;
            }
        }
        return $this->result;
    }

    function isMultipleBoth3and5(int $index): bool
    {
        return $this->isMultipleOf($index, self::MULTIPLES_OF_3) && $this->isMultipleOf($index, self::MULTIPLES_OF_5);
    }

    private function isMultipleOf(int $index, int $value): bool
    {
        return $index % $value === 0;
    }
}