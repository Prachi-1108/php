<?php
//1234 = 10

$sum=0;
$n=123;

for($i=0;$i<=strlen($n); $i++)
{
    $remainder = $n%10;  // 3 (last value)
    $sum = $sum + $remainder; // 0+3
    $n = $n/10; // 2 (second value)
}

echo "Sum of Digits = ".$sum;
?> 