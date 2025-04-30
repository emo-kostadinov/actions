<?php

declare(strict_types=1);

function multiplyByTen(int|float $number): int|float
{
    return $number >= 0 ? $number * 10 : $number * -10;
}
