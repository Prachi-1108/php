<?php
$x='abc';
$$x=1000;

echo "x=".$x;
echo "<br>refrence of x is".$$x;
echo "<br>x=".$abc;

$name="Kano";
$$name = "Sojitra";

echo "<br>my name is $name" .$$name;
?>