<?php
$fname=unlink('E:\\php_file.php');
if($fname)
{
    echo "file is deleted";
}
else{
    echo "sorry";
}
?>