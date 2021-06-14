<?php
include 'selectdb.php';

$sql="insert into emp1 values('Shubhang',4,'cs',1,'Noida'),('Vishal',5,'cs',2,'Noida'),('Ayush',6,'ece',3,'Noida'),('Samarth',7,'cs',3,'Noida'),('Neha',8,'cs',3,'Noida'),('Gaurav',9,'mechanical',2,'Noida')";
if(mysqli_query($con,$sql))
echo "Data inserted";
else
echo "Not inserted";
?>