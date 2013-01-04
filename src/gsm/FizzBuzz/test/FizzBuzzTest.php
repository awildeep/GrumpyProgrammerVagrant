<?php

namespace gsm\FizzBuzz\test;

/**
 * Iterate through a set of integers
 *
 * on multiple of 3, return Fizz
 * on multiple of 5, return Buzz
 * on multiple of 3 and 5, return FizzBuzz
 * otherwise return the integer
 */
use gsm\fizzBuzz;

class FizzBuzzTest extends \PHPUnit_Framework_TestCase
{
    public function FizzBuzzProvider()
    {
        return array(
            array('Fizz', -3),
            array('Fizz', 3),
            array('Fizz', 6),
            array('Buzz', -5),
            array('Buzz', 5),
            array('Buzz', 10),
            array('FizzBuzz', -15),
            array('FizzBuzz', 0),
            array('FizzBuzz', 15),
            array('FizzBuzz', 30),
            array(-7, -7),
            array(7, 7),
            array(38, 38),
        );
    }

    /**
     * @test
     * @dataProvider FizzBuzzProvider()
     */
    public function fizzBuzzScenarios($expected, $testValue)
    {
        $testFizzBuzz = new FizzBuzz\FizzBuzz ();
        $response = $testFizzBuzz->evaluate($testValue);
        $this->assertEquals(
            $expected,
            $response,
            "Did not get {$expected} as a response"
        );
    }
}