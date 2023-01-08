<?php

// Write a PHP program to check if a given string contains between 2 and 4 'z' character.

function test($s)
{
    $count = 0;

    for($i=0; $i < strlen($s); $i++)
    {
        if(substr($s, $i, 1) == 'z')
        {
            $count++;
        }
    }
    return $count >= 2 && $count <= 4 ? $count : 'Z not in range';
}

echo test('kakzzz');
echo test('kakzzzzz');
echo test('kakzz');