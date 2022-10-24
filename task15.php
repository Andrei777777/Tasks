<?php

function getNumberType(float $number): string
{
    if ($number > 0) {
        return "The entered number {$number} is positive";
    }

    if ($number < 0) {
        return "The entered number {$number} is negative";
    }

    return "The entered number {$number} is zero";
}

$number = readline("Enter the number to be checked: \n");

if (!is_numeric($number)) {
    die('Invalid Number');
}

echo getNumberType($number);
