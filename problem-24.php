<?php

// Write a PHP program to convert the last 3 characters of a given string in upper case.
// If the length of the string has less than 3 then uppercase all the characters.

function test($s)
{
    return strlen($s) <3 ? strtoupper($s) : substr($s, 0, strlen($s)-3).strtoupper(substr($s, strlen($s)-3));
}

echo test('jdg')."\n";
echo test('proshenjit')."\n";
echo test('vabon')."\n";
echo test('karmakar')."\n";