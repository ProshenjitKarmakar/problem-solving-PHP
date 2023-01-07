<?php
//Write a PHP program to check two given integers whether either of them is in the range 100..200 inclusive.

function test($x, $y)
{
    return ($x >= 100 && $x <= 200) || ($y >= 100 && $y <= 200) ? 'true' : 'false';
}


echo "Result is : ".test(101,198);
echo "Result is : ".test(12,99);
echo "Result is : ".test(187,280);

