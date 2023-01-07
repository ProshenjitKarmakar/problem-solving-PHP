<?php
//Write a PHP program to check if a given positive number is a multiple of 3 or a multiple of 7.

function test($x)
{
//    return $x%3==0 || $x%7==0 ? 'true' : 'false';

    if($x%3==0 || $x%7==0)
    {
        return 'true';
    }
    else{
        return 'false';
    }
}

echo "Result is : ".test(2);