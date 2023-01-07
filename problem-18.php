<?php
// Write a PHP program to check the largest number among three given integers.

function test($x, $y, $z)
{
    if($x > $y && $x > $z)
    {
        return $x;
    }
    elseif($y > $z && $y > $x)
    {
        return $y;
    }
    else{
        return $z;
    }
}

echo "Result is : ".test(100,399,200);