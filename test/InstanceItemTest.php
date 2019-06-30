<?php
declare(strict_types=1);

namespace MarioDevment\Linio\Test;

use MarioDevment\Linio\Application\instanceItem;
use PHPUnit\Framework\TestCase;

final class InstanceItemTest extends TestCase
{
    /** @var instanceItem|null * */
    private $instanceItem;

    public function setUp(): void
    {
        parent::setUp();
        $this->instanceItem = new instanceItem();
    }

    public function tearDown(): void
    {
        $this->instanceItem = null;
    }

    /**
     * @dataProvider dataProveider
     * @param int $index
     * @param string $message
     */
    public function testReturnSameIndexMessage(int $index, string $message): void
    {
        $item = $this->instanceItem->__invoke($index);
        $this->assertSame($message, $item->message()->value());
    }

    public function dataProveider(): array
    {
        return [
            "1"         => [
                "index"   => 1,
                "message" => "1",
            ],
            "2"         => [
                "index"   => 2,
                "message" => "2",
            ],
            "3"         => [
                "index"   => 3,
                "message" => "Linio",
            ],
            "5"         => [
                "index"   => 5,
                "message" => "IT",
            ],
            "6"         => [
                "index"   => 6,
                "message" => "Linio",
            ],
            "15"        => [
                "index"   => 15,
                "message" => "Linianos",
            ],
            "21"        => [
                "index"   => 21,
                "message" => "Linio",
            ],
            "30"        => [
                "index"   => 30,
                "message" => "Linianos",
            ],
            "60"        => [
                "index"   => 60,
                "message" => "Linianos",
            ],
            "65"        => [
                "index"   => 65,
                "message" => "IT",
            ],
            "75"        => [
                "index"   => 75,
                "message" => "Linianos",
            ],
            "90"        => [
                "index"   => 90,
                "message" => "Linianos",
            ],
            "99"        => [
                "index"   => 99,
                "message" => "Linio",
            ],
            "100"        => [
                "index"   => 100,
                "message" => "IT",
            ]
        ];
    }
}