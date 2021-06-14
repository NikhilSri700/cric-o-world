<?php
$hostname = "localhost";
$username = "root";
$password = "";
 
//connection to the mysql
$con = new mysqli($hostname, $username, $password) ;
if (!$con){ die('Could not connect: '. mysqli_error());}
//echo "Connected to MySQL<br>";
?>