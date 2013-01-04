<?php
namespace gsm\FizzBuzz;

class FizzBuzz
{
    public function evaluate($value)
    {
        if ($value % 15 == 0) {
            $return = 'FizzBuzz';
        } elseif ($value % 3 == 0) {
            $return = 'Fizz';
        } elseif ($value % 5 == 0) {
            $return = 'Buzz';
        } else {
            $return = $value;
        }

        return $return;
    }
}
