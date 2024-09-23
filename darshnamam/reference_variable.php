<?php 

$x = "abc";
$$x = 1000; //value of address

echo "x = ".$x;
echo "<br>reference of x is ".$$x;
echo "<br>x = ".$abc;

$name = "prachi  ";
$$name = "bhavsar";

echo "<br>My Name is $name".$$name;

?>