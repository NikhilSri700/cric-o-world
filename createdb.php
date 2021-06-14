<?php
include 'mysqlconnect.php';

$sql="create database emp;";
if(mysqli_query($con,$sql))
echo "Database Created";
?>