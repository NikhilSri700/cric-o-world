<?PHP
include "selectdb.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">

<!-- If IE use the latest rendering engine -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Set the page to the width of the device and set the zoon level -->
<meta name="viewport" content="width = device-width, initial-scale = 1">
<title>TEAM</title>
<link rel="stylesheet"  href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="style1.css">
<style>
.tab
{
display:inline-block;
margin-left:40px;
}


.jumbotron{
    background-color:#2E2D88;
    color:white;
}
/* Adds borders for tabs */
.tab-content {
    border-left: 1px solid #ddd;
    border-right: 1px solid #ddd;
    border-bottom: 1px solid #ddd;
    padding: 10px;
}
.nav-tabs {
    margin-bottom: 0;
}

.popo
{
 word-spacing: 150px;
}
.ic{
    padding-left: 10px;
    padding-right: 10px;
    height: 40px;
    width: 60px;
}
.ic:hover{
    opacity: 0.7;
}
 


</style>
<script>
    function logout()
    {
        alert("logout");
        window.location.replace("logout.php");
    }
</script>

</head>
<body background="bg3 (1).png" style="background-repeat: no-repeat; background-size: 1700px 1800px; background-position: left; ">
  <header>
        <div class="container">
        <div class="jumbotron">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="logo" id="logo">
                       <ul class="list-inline">
                       <li><img style="height: 120px;
                            width: 160px;" src="logo.png"></li>
                       <li style="padding-left: 25px;"><h2 style="font-size: 2.75em;"><b>CRIC-O-WORLD</b></h2></li>
                       </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="login" id="login" >
                        <ul class="list-inline">
                            <?php
                            include 'selectdb.php';
                            $sql="select Name from user where status =1";
                            $result=mysqli_query($con,$sql);
                             $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
                            $name="";
                            $name=$row['Name'];
                            if($name!=""){
                               echo" </button></li>
                            <li><button type='button' class='btn btn-info btn-lg' onclick='logout();'>Log out</a></button></li>"."<li><button type='button' class='btn btn-info btn-lg role='disabled'>Welcome ".$name ."</li>";}
                              else
                                echo" <li><button type='button' class='btn btn-info btn-lg '><span class='glyphicon glyphicon-pencil lolo'></span><a href='register.php'>Sign Up</a></button></li>
                            <li><button type='button' class='btn btn-info btn-lg'><span class='glyphicon glyphicon-user lolo'></span><a href='login.php'>Login</a></button></li>"
                            ?>
                           
                        </ul>   
                     </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12"> 
                    <div class="text-center"> 
                        <div class="btn-group btn-md" role="button">
                            <div class="btn-group btn-md" role="button">                
                                <div class="dropdown" style="padding: 5px;">
                                    <button type="button" class="btn btn-danger btn-lg " onclick="window.location.href ='home.php';">Home</button>
                                </div>
                            </div>
                            <div class="btn-group btn-md" role="button">                
                                <div class="dropdown" style="padding: 5px;">
                                    <button class="btn btn-danger btn-lg" onclick="window.location.href ='teams.php';">Teams</button>
                                </div>
                            </div>
                            <div class="btn-group btn-md" role="button">                
                                <div class="dropdown" style="padding: 5px;">
                                    <button class="btn btn-danger btn-lg " onclick="window.location.href ='schedules.php';">Schedules</button>
                                </div>
                            </div>
                            <div class="btn-group btn-md" role="button">                
                                <div class="dropdown" style="padding: 5px;">
                                    <button class="btn btn-danger btn-lg " onclick="window.location.href ='veneue.php';">Venue</button>
                                </div>
                            </div>
                            <div class="btn-group btn-md" role="button">                
                                <div class="dropdown" style="padding: 5px;">
                                    <button class="btn btn-danger btn-lg" onclick="window.location.href ='bookticket.php';">Book Ticket</button>
                                </div>
                            </div>
                            <div class="btn-group btn-md" role="button">                
                                <div class="dropdown" style="padding: 5px;">
                                    <button class="btn btn-danger btn-lg " onclick="window.location.href ='profile.php';">Profile</button>
                                </div>
                            </div>   
                        </div>
                    </div>
                </div>
            </div>
        </header>
  <div class="container">
    <div class="page-header">
    <h2><a href="home.php">Home</a> > <a href="teams.php">Teams</a></h2>
    </div>
    <div class="container">
<div class="container">
<div class="well well-sm">
<div class="row">
  
  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
    <div class="thumbnail">
      <img style="width: 343px; height: 200px;" src="sri.jpg" alt="...">
      <div class="caption">
        <h3><b>SRI LANKA</b></h3>
        <?php
        $sql= "select * from team where captain='Dimuth Karunaratne'";
        $result=mysqli_query($con,$sql);
        $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
        echo "<p>Captain:".$row['captain']."<br>Playing from:".$row['date']."<br>Coach Name:".$row['coach']."<br></p>";?>
       <!-- <p class="btn btn-primary" role="button">INDIA</p>-->
      </div>
      </div>
  </div>
  
  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
    <div class="thumbnail">
      <img style="width: 343px; height: 200px;" src="wi.jpg" alt="...">
      <div class="caption">
        <h3><b>WESTINDIES	</b></h3>
         <?php
        $sql= "select * from team where captain='Jason Holder'";
        $result=mysqli_query($con,$sql);
        $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
        echo "<p>Captain:".$row['captain']."<br>Playing from:".$row['date']."<br>Coach Name:".$row['coach']."<br></p>";?>
      </div>
      </div>
  </div>
  
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
    <div class="thumbnail">
     <img style="width: 343px; height: 200px;" src="newzealan.jpg" alt="...">
      <div class="caption">
        <h3><b>NEWZEALAND</b></h3>
         <?php
        $sql= "select * from team where date=1877";
        $result=mysqli_query($con,$sql);
        $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
        echo "<p>Captain:".$row['captain']."<br>Playing from:".$row['date']."<br>Coach Name:".$row['coach']."<br></p>";?>
      </div>
      </div>
  </div>
  </div>
  <div class="row">
   <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
    <div class="thumbnail">
      <img style="width: 343px; height: 200px;" src="australia.png" alt="...">
      <div class="caption">
        <h3><b>AUSTRALIA</b></h3>
         <?php
        $sql= "select * from team where date=1877";
        $result=mysqli_query($con,$sql);
        $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
        echo "<p>Captain:".$row['captain']."<br>Playing from:".$row['date']."<br>Coach Name:".$row['coach']."<br></p>";?>
      </div>
      </div>
  </div>
  
   <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
    <div class="thumbnail">
     <img style="width: 343px; height: 200px;" src="pakistan.jpg" alt="...">
      <div class="caption">
        <h3><b>PAKISTAN</b></h3>
         <?php
        $sql= "select * from team where captain='Sarfaraz Ahmed'";
        $result=mysqli_query($con,$sql);
        $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
        echo "<p>Captain:".$row['captain']."<br>Playing from:".$row['date']."<br>Coach Name:".$row['coach']."<br></p>";?>
      </div>
      </div>
  </div>
  
   <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
    <div class="thumbnail">
      <img style="width: 343px; height: 200px;" src="sa.png" alt="...">
      <div class="caption">
        <h3><b>SOUTH AFRICA	</b></h3>
         <?php
        $sql= "select * from team where date=1970";
        $result=mysqli_query($con,$sql);
        $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
        echo "<p>Captain:".$row['captain']."<br>Playing from:".$row['date']."<br>Coach Name:".$row['coach']."<br></p>";?>
      </div>
      </div>
  </div>
  </div>
  <div class="row">
   <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
    <div class="thumbnail">
      <img style="width: 343px; height: 200px;" src="bangla.png" alt="...">
      <div class="caption">
        <h3><b>BANGLADESH</b></h3>
         <?php
        $sql= "select * from team where captain='Mashrafe Mortaza'";
        $result=mysqli_query($con,$sql);
        $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
        echo "<p>Captain:".$row['captain']."<br>Playing from:".$row['date']."<br>Coach Name:".$row['coach']."<br></p>";?>
      </div>
      </div>
  </div>
  
   <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
    <div class="thumbnail">
      <img style="width: 343px; height: 200px;" src="india.png" alt="...">
      <div class="caption">
        <h3><b>INDIA</b></h3>
         <?php
        $sql= "select * from team where date=1926";
        $result=mysqli_query($con,$sql);
        $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
        echo "<p>Captain:".$row['captain']."<br>Playing from:".$row['date']."<br>Coach Name:".$row['coach']."<br></p>";?>
      </div>
  </div>
  </div>
   <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
    <div class="thumbnail">
      <img style="width: 343px; height: 200px;" src="england.png" alt="...">
      <div class="caption">
        <h3><b>ENGLAND</b></h3>
         <?php
        $sql= "select * from team where captain='Eoin Morgan'";
        $result=mysqli_query($con,$sql);
        $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
        echo "<p>Captain:".$row['captain']."<br>Playing from:".$row['date']."<br>Coach Name:".$row['coach']."<br></p>";?>
      </div>	
      </div>
  </div>
</div>
</div>
<footer>
        <div class="container">
            <div class="jumbotron">
                <div class="row">
                    <div class="col-md-6">
                        <div class="logo" id="logo">
                       <ul class="list-inline">
                       <li><img style="height: 40px;
                            width: 60px;" src="logo.png"></li>
                       <li style="padding-left: 90px;"><h2 style="font-size: 2.1em;"><b>CRIC-O-WORLD</b></h2></li>
                       </ul>
                    </div>
                    </div>
                <div class="col-md-6">
                    <div class="follow">
                    <div class="text-center">
                        <ul>
                            <li><a href=""><img class="ic" src="icon/Facebook.png"></a></li>
                            <li><a href=""><img class="ic" src="icon/Google+.png"></a></li>
                            <li><a href=""><img class="ic" src="icon/Linkedin.png"></a></li>
                            <li><a href=""><img class="ic" src="icon/Instagram.png"></a></li>
                            <li><a href=""><img class="ic" src="icon/YouTube.png"></a></li>
                        </ul>
                    </div>
                    </div>
                </div>
            </div>
            </div>
            <div class="ro">
                <div class="footerbottom">
                    <center><p><small>© 2019 Crico-o-World.com, Limited. All rights reserved</small></p></center>
                </div>
            </div>
        </div>
    </footer>

<script src="jquery/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script></body>
</html>