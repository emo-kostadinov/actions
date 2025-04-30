<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/functions.php';

final class MultiplyByTenTest extends TestCase
{
    public function testPositiveNumber(): void
    {
        $this->assertEquals(50, multiplyByTen(5));
    }

    public function testNegativeNumber(): void
    {
        $this->assertEquals(-30, multiplyByTen(-3));
    }

    public function testZero(): void
    {
        $this->assertEquals(0, multiplyByTen(0));
    }

    public function testPositiveFloat(): void
    {
        $this->assertEquals(12.3, multiplyByTen(1.23));
    }

    public function testNegativeFloat(): void
    {
        $this->assertEquals(-45.6, multiplyByTen(-4.56));
    }
}
