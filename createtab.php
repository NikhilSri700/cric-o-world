<?php
include 'selectdb.php';

$sql="create table emp1(name varchar(20), emp_id int, department_name varchar(20),
manager_id int, city varchar(20))";
if(mysqli_query($con,$sql))
echo "<br>table created <br>";
?>