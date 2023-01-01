<?php
function test($x)
{
//    return $x<51 ? 51-$x : ($x-51)*3;

    if ($x<51)
    {
        return  51 - $x;
    }
    else{
       return ($x - 51)*3;
    }
}

echo "Result is : ".test(60);
?>