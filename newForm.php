<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST">
    <button type="submit" name="con">Connect to SQL</button><br><br>
        <button type="submit" name="showdb">Show Databases</button><br><br>   
    </form>
    <form method="POST">
    <input type="text" name="dbname">
    <button type="submit" name="createdb">Create Database</button><br><br> 
    <input type="text" name="dbname1">
    <button type="submit" name="selectdb">Select database</button><br><br>
    <button type="submit" name="showtab">Show tables</button><br><br>
    </form>
    <?php

    $servername = "localhost";
    $username = "root";
    $password = ""; 
    $db='';
    if(isset($_POST['con']))
    {
        $conn = new mysqli($servername, $username, $password);
        if (mysqli_error($conn)) {
            die("Connection failed: " . mysqli_error($conn));
        }
        echo "Connected successfully";
    }
    if(isset($_POST['showdb']))
    {
        $conn = new mysqli($servername, $username, $password);
        $sql="show databases;";
        $res=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_assoc($res))
        {
            echo "<br><br>".$row['Database'];
        }
    }   
     if(isset($_POST['createdb']))
         {
            $conn = new mysqli($servername, $username, $password);
            $sql="create database ".$_POST["dbname"].";";
            if (mysqli_query($conn, $sql)) {
                echo "Database created successfully";
            } else {
                echo "Error creating database: " . mysqli_error($conn);
            }
            
         }
    if(isset($_POST['selectdb']))
    {
        $db=$_POST['dbname1'];
        $conn = new mysqli($servername, $username, $password,$db);
        if($conn)
        echo "<br> Database selected <br>";
    }
    if(isset($_POST['showtab']))
    {
        $conn = new mysqli($servername, $username, $password,'mysql');
        $sql="show tables;";
        $res=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_assoc($res))
        {
            
            echo "<br><br>".$row['Tables_in_mysql'];
        }
    }
    ?>

    
</body>
</html>