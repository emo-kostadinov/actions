<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class MultiplyByTenTest extends TestCase
{
    public function test_positive_number(): void
    {
        $this->assertEquals(50, multiplyByTen(5));
    }

    public function test_negative_number(): void
    {
        $this->assertEquals(-30, multiplyByTen(-3));
    }

    public function test_zero(): void
    {
        $this->assertEquals(0, multiplyByTen(0));
    }

    public function test_positive_float(): void
    {
        $this->assertEquals(12.3, multiplyByTen(1.23));
    }

    public function test_negative_float(): void
    {
        $this->assertEquals(-45.6, multiplyByTen(-4.56));
    }
}
