<?php

class Calculator {

    public function sum($a, $b)
    {
        return $a + $b;
    }

    public function subtract($a, $b)
    {
        return $a - $b;
    }

    public function multiply($a, $b)
    {
        return $a * $b;
    }

    public function divide($a, $b)
    {
        if($b == 0){
            throw new InvalidArgumentException(
                "Division by zero is not allowed."
            );
        }

        return $a / $b;
    }

    public function power($base, $exponent)
    {
        return pow($base, $exponent);
    }

    public function squareRoot($number)
    {
        if($number < 0){
            throw new InvalidArgumentException(
                "Cannot calculate square root of a negative number."
            );
        }

        return sqrt($number);
    }

    public function modulus($a, $b)
    {
        return $a % $b;
    }

    public function percentage($total, $percentage)
    {
        return ($total * $percentage) / 100;
    }

    public function average(array $numbers)
    {
        if(empty($numbers)){
            throw new InvalidArgumentException(
                "Array cannot be empty."
            );
        }

        return array_sum($numbers) / count($numbers);
    }

}