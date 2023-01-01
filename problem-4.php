<?php

//Write a PHP program to check a given integer and return true if it is within 10 of 100 or 200.

function test($x)
{
//    return ((100 - $x) <=10) || ((200 - $x) <=10) ? 'true' : 'false';
    if (((100 - $x) <=10) || ((200 - $x) <=10))
    {
        return 'true';
    }
    else{
        return 'false';
    }
}

echo "Result is : ".test(9);