<?php
include 'selectdb.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book Ticket</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style1.css">

    <style>
.jumbotron{
    background-color:#2E2D88;
    color:white;
    border-radius: 10px;
    margin: auto;
}
}

.tab-content {
    border-left: 1px solid #ddd;
    border-right: 1px solid #ddd;
    border-bottom: 1px solid #ddd;
    padding: 10px;
}
.nav-tabs{
    margin-bottom: 0;
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
<body>
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
                                    <button class="btn btn-danger btn-lg " onclick="window.location.href ='#';">Schedules</button>
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
   <div class="row"><div class="col-md-12 page-header">
            <h2><a href="home.php">Home</a> > <a href="bookticket.php">Book Ticket</a></h2>
        </div></div>
    

    
    <div class="row"><section calss="body col-md-12" id="main">
        
    <h1><center>List of all upcoming matches</center></h1><br>
    </p></div>
    </div><br><br><br></div></div>

     <div class="container"><div class="row"><div class="col-md-12"><p><?php
      $sql="select * from matches inner join venue on venue.id=matches.venueid order by dateofmatch";
      $result=mysqli_query($con,$sql);
      
      echo "<form method='post' action='bookticketp.php'><table border =10 align='center'>";
        echo "<tr><th>Chose</th><th>Team1</th><th>Team2</th><th>Venue-Name</th><th>Date of Match</th><th>Country</th><th>city</tr>";
        while($row =mysqli_fetch_array($result,MYSQLI_ASSOC)){
                    $value=$row['match_id'];
        echo "<tr><td ><input type='radio' name='match'  value='$value'></td>"."<td>" . $row['team1'] . "</td><td>" . $row['team2'] ."</td><td>".$row['Name']."</td><td>".$row['dateofmatch']."</td><td>".$row['country']."</td><td>".$row['cit']."</td></tr>";}
        echo"</table>";
       echo "<h3><b>Enter number of seats you want to book : </b></h3><input type='text' name='no'><br>
        <br><center><button class='btn btn-danger btn-lg' onclick='bookticket()'>Book Ticket</button></center></form>";


    ?></div></div></div><br><br>


    </section>
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
    <script type="text/javascript">
    function bookticket()
    {
        alert("confirm booking");
    }
</script>
   
    <script src="jquery/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
   
</body>
</html>
