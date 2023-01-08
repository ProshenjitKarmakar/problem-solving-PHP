<?php

//Write a PHP program to check whether two given integers are in the range 40..50 inclusive,
// or they are both in the range 50..60 inclusive.

function test($x, $y)
{
//    return (($x >= 40 && $x <= 50) && ($y >= 40 && $y <= 50) || ($x >= 50 && $x <= 60) && ($y >= 50 && $y <= 60)) ? 'true' : 'false';

    if (($x >= 40 && $x <= 50) && ($y >= 40 && $y <= 50) || ($x >= 50 && $x <= 60) && ($y >= 50 && $y <= 60))
    {
        return 'true';
    }
    else{
        return 'false';
    }
}


echo test(40, 50)." Is is range."."\n";
echo test(33, 4)." Is is range."."\n";