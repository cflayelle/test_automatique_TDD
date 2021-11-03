<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class NombreRomanTest extends TestCase
{
    public function test0(): void
    {
        $this->assertEquals("", NombreToRoman::decimalToRoman(0));
    }
    public function test1(): void
    {
        $this->assertEquals("I", NombreToRoman::decimalToRoman(1));
    }
    public function test2(): void
    {
        $this->assertEquals("II", NombreToRoman::decimalToRoman(2));
    }
    public function test3(): void
    {
        $this->assertEquals("III", NombreToRoman::decimalToRoman(3));
    }
    // public function test4(): void
    // {
    //     $this->assertEquals("IV", NombreToRoman::decimalToRoman(4));
    // }
    // public function test5(): void
    // {
    //     $this->assertEquals("V", NombreToRoman::decimalToRoman(5));
    // }
    // public function test6(): void
    // {
    //     $this->assertEquals("VI", NombreToRoman::decimalToRoman(6));
    // }
    // public function test7(): void
    // {
    //     $this->assertEquals("VII", NombreToRoman::decimalToRoman(7));
    // }

}
