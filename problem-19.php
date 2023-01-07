<?php
//Write a PHP program to check which number nearest to the value 100 among two given integers.
// Return 0 if the two numbers are equal.

function test($x, $y)
{
    $val1 = abs($x - 100);
    $val2 = abs($y - 100);

    return $x == $y ? 0 : ($val1 < $val2 ? $x : $y);
}

echo test(12, 17)."  is near to 100"."\n";
echo test(12, 12)."  is near to 100"."\n";
echo test(79, 91)."  is near to 100"."\n";