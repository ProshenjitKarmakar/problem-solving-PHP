<?php

// Write a PHP program to check if two given non-negative integers have the same last digit.

function test($x, $y)
{
    return abs($x % 10) == abs($y % 10) ? 'last Digit are same' : 'last Digit are not same';
}

echo test(2212, 33);
echo test(2212, 33);
echo test(2212, 332);
echo test(345647, 43337);
