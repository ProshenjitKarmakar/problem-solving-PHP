<?php
//Write a PHP program to get the absolute difference between n and 51. If n is greater than 51 return triple the absolute difference. 
function test($x, $y)
{
//    return $x==$y ? ($x+$y)*3 : $x+$y;
    if($x==$y)
    {
        echo ($x+$y)*3;
    }
    else{
        echo $x+$y;
    }
}

echo test(3, 2)."\t";
echo test(3, 3)."\t";
echo test(5,5)."\t";