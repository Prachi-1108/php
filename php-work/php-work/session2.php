<?php
session_start();
?>
<html>
    <body>
        <?php
        echo "<br><br>session value is:".$_SESSION['user'];
        echo "<br><br>session id:".session_id();

        if(!isset($_SESSION['c'])) {
            $_SESSION['c'] = 1;
        }else{
            $_SESSION['c']++;
        }
        echo ("<br><br>counter of session: ".$_SESSION['c']);
        ?>
    </body>
</html>
