<?php
//Write a PHP program to create a new string where 'if' is added to the front of a given string. If the string already begins with 'if', return the string unchanged

function test($s)
{
//    return strlen($s)>2 && substr($s, 0, 2)== 'if' ? $s : 'if'.$s;

    if (strlen($s)>2 && substr($s, 0, 2)== 'if')
    {
        return $s;
    }
    else{
        return 'if'.$s;
    }
}

echo test('elseif')."\n";
echo test('ifHas1')."\n";
echo test('ifHas2')."\n";












