<?php
	include "selectdb.php";
	$sql="update user set status=0";
	mysqli_query($con,$sql);

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