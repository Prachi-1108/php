<html>
    <body>
<?php
$uname = $_POST["uname"];
$pass = $_POST["pass"];

session_start();

include './header.html';

$_SESSION['user']=$uname;

echo "username is:".$uname;
echo "<br> <br>";
echo "password is".$pass;


if(!isset($_COOKIE['a1']))
{
	echo "cookie is not found";
}
else
{
	echo "<br><br>";
	echo "<br>cookie value is:".$_COOKIE['a1'];
}

if(!isset($_SESSION['user']))
{
    echo "<br><br>session not created";
}
else{
    echo "<br><br>session value is:".$_SESSION['user'];
    echo "<br><br>session id=".session_id();
}



include "footer.html";

?>

<a href="session2.php">GO to next page</a>
</body>
</html>