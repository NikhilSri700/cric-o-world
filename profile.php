

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width = device-width, initial-scale = 1">
    
    <title>Profile</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" type="text/css" href="style1.css">

<script src="jquery/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<style>
.jumbotron{
    background-color:#2E2D88;
    color:white;
}

.tab-content {
    border-left: 1px solid #ddd;
    border-right: 1px solid #ddd;
    border-bottom: 1px solid #ddd;
    padding: 10px;
}
.nav-tabs {
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
            <h2><a href="home.php">Home</a> > <?php include "selectdb.php"; $sql2="select * from user where status=1";
                $result2=mysqli_query($con,$sql2);
                $row2=mysqli_fetch_array($result2,MYSQLI_ASSOC); echo $row2['Name'];  ?> </h2>
        </div>
            <div class="mania text-center"><h1> Your Account Details</h1></div>
        <div class="cent pro">
            <div class="largetxt">
                <?php
                include "selectdb.php";

                $sql="select * from user inner join booked_tickets on id=userid where status=1";
                $result=mysqli_query($con,$sql);
                $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
                $sql2="select * from user where status=1";
                $result2=mysqli_query($con,$sql2);
                $row2=mysqli_fetch_array($result2,MYSQLI_ASSOC);
                echo "<ul style='list-style-type: none'>
                    <li>Name : ".$row2['Name']."</li>
                    <li>Gender :".$row2['gender']."</li>
                    <li>Email :".$row2['user_name']."</li>
                    <li>Password :".$row2['password']."</li>
                    <li>Your Tickets:</li>
                </ul>";
                
                $sql="select * from matches inner join venue on venueid=id where match_id in (select matchid from user inner join booked_tickets on id=userid where status=1)";
                $result=mysqli_query($con,$sql);
                echo "<form method='post' action='cancelticket.php'><table border =10 align='center'>";
                echo "<tr><th>Chose</th><th>Team1</th><th>Team2</th><th>Venue-Name</th><th>Date of Match</th><th>Country</th><th>city</tr>";
                while($row =mysqli_fetch_array($result,MYSQLI_ASSOC)){
                    $value=$row['match_id'];
                    echo "<tr><td ><input type='radio' name='match'  value='$value'></td>"."<td>" . $row['team1'] . "</td><td>" . $row['team2'] ."</td><td>".$row['Name']."</td><td>".$row['dateofmatch']."</td><td>".$row['country']."</td><td>".$row['cit']."</td></tr>";}
                    echo"</table>";
                    echo "<br><br><center><button class='btn btn-danger btn-lg' type='submit'>cancel booking</button></center>";
                    echo "</form>";
                    


                ?>
            </div>
        </div>
    </div>
    <br><br><br>
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
</body>
</html>
