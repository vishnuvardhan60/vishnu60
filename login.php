<?php

session_start();


 
$email=$_SESSION["email"];

echo "<h3>login success, welcome $email </h3>";
echo "<br /><br /><a href='logout.php'>logout</a>";


?>
