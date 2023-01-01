<?php


//Write a PHP program to check two given integers, and return true if one of them is 30 or if their sum is 30.
function test($x, $y)
{
//    return ($x==30) || ($y==30) || ($x+$y)==30 ? 'true' : 'false';
    if (($x==30) || ($y==30) || ($x+$y)==30 )
    {
        return 'true';
    }
    else{
        return 'false';
    }
}

echo "Result is : ".test(15,15);
?>
