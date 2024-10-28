<?php
//1234=10

$n = 4561;
$sum = 0;
for ($i=0;$i<=strlen($n);$i++)
{
    $rem=$n%10;
    $sum = $sum+$rem;
    $n=$n/10;
}
echo "sum of digit=".$sum;

?>