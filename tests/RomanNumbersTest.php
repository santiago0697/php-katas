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
        ];
    }
}
