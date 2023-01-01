<?php
//Write a PHP program to remove the character in a given position of a given string. The given position will be in the range 0..string length -1 inclusive.


function test($s, $n)
{
    return substr($s,0,$n).substr($s,$n+1,strlen($s)-$n);
}

echo "Result is : ".test('hello', 2)."\n";
echo "Result is : ".test("Python", 1)."\n";
echo "Result is : ".test("Python", 0)."\n";
echo "Result is : ".test("Python", 4)."\n";