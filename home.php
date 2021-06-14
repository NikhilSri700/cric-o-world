<?php
include 'selectdb.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cric-o-World</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style1.css">
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

    
    <section class="mainpage">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div class="thumbnail" style="background-color: rgba(255,255,255,0.7);">
                        <img style="float: left; height: 150px; width: 150px;" src="team.png" alt="...">
                        <div class="caption">
                        <h3>Teams</h3>
                        <p style="padding: 5px; margin: 5px;"><b>This page consist a list of all international teams. The International Cricket Council (ICC) was founded at Lord's on 15 June 1909 as the Imperial Cricket Conference, with Australia, England, and South Africa as its founding members. In the beginning, only countries within the Commonwealth could join.[2] These members were then joined by India, New Zealand, and the West Indies in 1926 and later by Pakistan in 1953. In 1961, South Africa resigned due to their leaving the Commonwealth, but they continued to play Test cricket until their international exile in 1970.</b></p>
                        <p><a href="teams.php" class="btn btn-primary" role="button">Visit page</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div class="thumbnail" style="background-color: rgba(255,255,255,0.7);">
                        <img style="float: left; height: 150px; width: 150px;" src="fix.png" alt="...">
                        <div class="caption">
                        <h3>Schedules</h3>
                        <p style="padding: 5px; margin: 5px;"><b>This page shows you the list of all upcoming matches so that you don't miss any fun. For example The ICC Cricket World Cup is the international championship of One Day International (ODI) cricket. The event is organised by the sport's governing body, the International Cricket Council (ICC), every four years, with first qualification rounds leading up to a semifinals and then finals tournament. The tournament is one of the world's most viewed sporting events and is considered the "flagship event of the international cricket calendar" by the ICC.</b></p>
                        <p><a href="schedules.php" class="btn btn-primary" role="button">Visit page</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">  
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                  <div class="thumbnail" style="background-color: rgba(255,255,255,0.7);">
                    <img style="float:left; height: 150px; width: 150px;" src="ven.png" alt="...">
                    <div class="caption">
                      <h3>Venue</h3>
                      <p style="padding: 5px; margin: 5px;"><b>This page show you the list of all famous Cricket stadium. A cricket field is a large grassy field on which the game of cricket is played. Although generally oval in shape, there is a wide variety within this: some are almost perfect circles, some elongated ovals and some entirely irregular shapes with little or no symmetry – but they will have entirely curved boundaries, almost without exception. There are no fixed dimensions for the field but its diameter usually varies between 450 feet (137 m) and 500 feet (150 m). Cricket is unusual among major sports (along with golf, Australian rules football and baseball) in that there is no official rule for a fixed-shape ground for professional games. On most grounds, a rope demarcates the perimeter of the field and is known as the boundary. Within the boundary and generally as close to the centre as possible will be the square which is an area of carefully prepared grass upon which cricket pitches can be prepared and marked for the matches.</b></p>
                      <p><a href="veneue.php" class="btn btn-primary" role="button">Visit page</a></p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                  <div class="thumbnail" style="background-color: rgba(255,255,255,0.7);">
                    <img style="float: left; height: 150px; width: 150px;" src="ticket.png" alt="...">
                    <div class="caption">
                      <h3>Book Your Ticket</h3>
                      <p style="padding: 5px; margin: 5px;"><b>Here you can book tickets of your desired match. A ticket is a voucher that indicates that an individual is entitled to admission to an event or establishment such as a theatre, amusement park or tourist attraction, or has a right to travel on a vehicle, such as with an airline ticket, bus ticket or train ticket. A ticket may serve simply as proof of entitlement or reservation. A ticket may be valid for any seat ("free seating") or for a specific one ("allocated seating"). This covers the Indian Premier League, Champions League T20, Cricket One Day Internationals, Cricket T20 Internationals and Cricket Test matches for various State Cricket Associations on an annual basis. Diversifying within Sports arena, services have been provided for Hockey inInternational matches as well as Hero Hockey India League, Extreme Sports, India Badminton League, Tennis and Basketball. Ticketgenie ensures that all its customers have a safe and secure system for purchasing tickets.</b></p>
                      <p><a href="bookticket.php" class="btn btn-primary" role="button">Visit page</a></p>
                    </div>
                  </div>
                </div>
              </div>
    </div>
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
    
    
    <script src="jquery/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
