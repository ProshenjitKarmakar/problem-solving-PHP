<?php
// Write a PHP program to create a new string which is n (non-negative integer) copies of a given string.

function test($s, $n)
{
    $result = "";

    for($i=0; $i<$n; $i++)
    {
        $result = $result.$s."\n";
    }
    return $result;
}

echo test('js',3);
echo test('proshenjit',3);
echo test('vabon',2);
