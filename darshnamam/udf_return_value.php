<?php 
function chk_num($a=1,$b)
{
   if($a>$b)
   {
    return 1;//true
   }else{
    return 0;//false
   }
}

$x=chk_num($a,2);
if($x==1){
    echo "<br>Given Number is Greater";
}else{
    echo "<br>Given Number is Smaller";
}


?>