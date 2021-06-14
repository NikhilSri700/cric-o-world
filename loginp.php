<?php
	include "selectdb.php";
	$user=$_POST["fmail"];
	$sql="select password from user where user_name='$user'";
	$result=mysqli_query($con,$sql);
	$pass="";
	$pass=mysqli_fetch_array($result,MYSQLI_ASSOC);
	$result=$pass['password'];
	$paas=$_POST["fpass"];
	if($result!=$paas)
		echo "worng password";
	else
	{
		echo "correct password";
		$sql="update user set status=1 where user_name='$user'";
		mysqli_query($con,$sql);
	}

?>
<html>
<head>
	<script>
    function home()
    {
        
        window.location.replace("home.php");
    }
</script>
</head>
<body onload="home()"></body>
</html>