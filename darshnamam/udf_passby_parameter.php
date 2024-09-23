<?php 
function even_odd(&$x)
{
    $x.="Good Morning!<br>";
    // if($x%2==0)
    // {
    //     echo $x."  given number is even<br>";
    // }else{
    //     echo $x."  given number is odd<br>";
    // }
}
// even_odd(8);
// even_odd(5);
// even_odd(1);
$y="hello everyone<br>";
even_odd($y);
echo $y;
?>