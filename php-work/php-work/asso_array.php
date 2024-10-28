<?php
$edata = array("eid"=>101,"ename"=>"Niraj","salary"=>1000000);
echo "eid is =".$edata["eid"];
echo "<br>ename is =".$edata["ename"];
echo "<br>salary is =".$edata["salary"];

foreach($edata as $value)
{
    echo "<br>";
    echo $value;
}
?>