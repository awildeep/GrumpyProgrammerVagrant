<?php

namespace spec\gsm\FizzBuzz;

use PHPSpec2\ObjectBehavior;

class FizzBuzz extends ObjectBehavior
{
    function it_should_return_fizz()
    {
        $this->evaluate(3)->shouldReturn('Fizz');
        $this->evaluate(6)->shouldReturn('Fizz');
    }

    function it_should_return_buzz()
    {
        $this->evaluate(5)->shouldReturn('Buzz');
        $this->evaluate(10)->shouldReturn('Buzz');
    }

    function it_should_return_fizzbuzz()
    {
        $this->evaluate(15)->shouldReturn('FizzBuzz');
        $this->evaluate(30)->shouldReturn('FizzBuzz');
    }

    function it_should_return_the_integer()
    {
        $this->evaluate(2)->shouldReturn(2);
        $this->evaluate(4)->shouldReturn(4);
    }
}
