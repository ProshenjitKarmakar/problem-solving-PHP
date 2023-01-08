<?php
// Write a PHP program to find the larger value from two positive integer values that is in the range 20..30 inclusive,
// or return 0 if neither is in that range.

function test($x, $y)
{
    return (($x >= 20 && $x <=30) && ($y >= 20 && $y <=30)) ? ($x > $y ? $x : $y) : 0;
}

echo test(21, 4)."\n";
echo test(21, 25)."\n";
echo test(4, 30)."\n";

