<?php

use PHPUnit\Framework\TestCase;
use App\RomanNumber;

class RomanNumbersTest extends TestCase
{
    /** 
     * @test
     * @dataProvider factors
     */
    function itGeneratesRomanNumber(int $number, string $expectedRomanNumber)
    {
        $romanNumber = new RomanNumber;
        $this->assertEquals($expectedRomanNumber, $romanNumber->get($number));
    }

    function factors()
    {
        return [
            [1, 'I'],
            [2, 'II'],
            [3, 'III'],
            [4, 'IV'],
            [5, 'V'],
            [6, 'VI'],
            [7, 'VII'],
            [8, 'VIII'],
            [9, 'IX'],
            [10, 'X'],
            [11, 'XI'],
            [33, 'XXXIII'],
            [99, 'XCIX'],
            [399, 'CCCXCIX'],
            [999, 'CMXCIX'],
        ];
    }
}
