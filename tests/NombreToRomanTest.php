<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class NombreRomanTest extends TestCase
{
    public function test1(): void
    {
        $this->assertEquals("", NombreToRoman::decimalToRoman(0));
    }
    public function test2(): void
    {
        $this->assertEquals("I", NombreToRoman::decimalToRoman(1));
    }

}
