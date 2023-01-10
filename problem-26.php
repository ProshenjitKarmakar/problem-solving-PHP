<?php

// Write a PHP program to create a new string which is n (non-negative integer) copies of the the first 3 characters of a given string.
// If the length of the given string is less than 3 then return n copies of the string.

function test($s, $n)
{
    $result = "";
    $txt = substr($s, 0, 3);
    for ($i=0; $i<$n; $i++)
    {
        $result= $result.$txt;
    }
    return $result;
}

echo test('abcdefgh',3)."\n";
echo test('Proshenjit',3)."\n";
echo test('Karmakar',3)."\n";
echo test('vabon',3)."\n";
echo test('karmkar',3)."\n";