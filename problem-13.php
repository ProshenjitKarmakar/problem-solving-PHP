<?php
//Write a PHP program to check if one given temperatures is less than 0 and the other is greater than 100.

function test($x, $y)
{
//    return $x<0 && $y>100 ? 'true' : 'false';
    if($x<0 && $y>100)
    {
        return 'true';
    }
    else{
        return 'false';
    }
}

echo "Result is : ".test(-1, 300);