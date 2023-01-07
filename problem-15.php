<?php

// Write a PHP program to check whether three given integer values are in the range 20..50 inclusive.
// Return true if 1 or more of them are in the said range otherwise false.

function test($x, $y, $z)
{
//    return ($x >= 20 && $x <=50) || ($y >= 20 && $y <=50) || ($z >= 20 && $z <=50) ? 'true' : 'false';
    if(($x >= 20 && $x <=50) || ($y >= 20 && $y <=50) || ($z >= 20 && $z <=50))
    {
        return 'true';
    }
    else{
        return 'false';
    }
}


echo "Result is : ".test(2, 3,5);

echo "Result is : ".test(21, 31,45);