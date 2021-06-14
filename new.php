<?php
include 'selectdb.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>knights with bats</title>
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

</style>
<script>
    function logout()
    {
        alert("logout");
        window.location.replace("logout.php");
    }
</script>

</head>
<body >
    <header>
        <div class="container">
        <div class="jumbotron">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="logo">
                       <img src="images/logo.png">
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
                                    <button class="btn btn-danger btn-lg" onclick="window.location.href ='bookticket.php';">book Ticket</button>
                                </div>
                            </div>
                            <div class="btn-group btn-md" role="button">                
                                <div class="dropdown" style="padding: 5px;">
                                    <button class="btn btn-danger btn-lg " onclick="window.location.href ='#';">Broadcast</button>
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

    
    <section calss="mainpage">
        <!-- Thumbnails -->
<div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
            <div class="thumbnail">
              <img src="images/teams.jpg.jpeg" alt="...">
              <div class="caption">
                <h3>Teams</h3>
                <p>This page consist a list of all domestic and international teams</p>
                <p><a href="#" class="btn btn-primary" role="button">Visit page</a></p>
              </div>
              </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
            <div class="thumbnail">
              <img src="images/leagues.jpeg" alt="...">
              <div class="caption">
                <h3>Leagues</h3>
                <p>This page shows you the list of all the importatn leagues</p>
                <p><a href="#" class="btn btn-primary" role="button">Visit page</a></p>
              </div>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
            <div class="thumbnail">
              <img src="images/ranking.jpg" alt="...">
              <div class="caption">
                <h3>Ranking</h3>
                <p>This page shows Ranking table of all the players from all over the world</p>
                <p><a href="#" class="btn btn-primary" role="button">Visit page</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                  <div class="thumbnail">
                    <img src="images/schedules.jpg" alt="...">
                    <div class="caption">
                      <h3>Schedules</h3>
                      <p>this page shows you the list of all upcoming matches so that you don't miss any fun.</p>
                      <p><a href="#" class="btn btn-primary" role="button">Visit page</a></p>
                    </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                  <div class="thumbnail">
                    <img src="images/venue.jpg" alt="...">
                    <div class="caption">
                      <h3>Venue</h3>
                      <p>This page show you the list of all famous Cricket stadium</p>
                      <p><a href="#" class="btn btn-primary" role="button">Visit page</a></p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                  <div class="thumbnail">
                    <img src="images/cric-mania.jpg" alt="...">
                    <div class="caption">
                      <h3>Cric-mania</h3>
                      <p>This is awesome quiz for cric freaks to use their cricket knoweledge to earn awesome gifts.</p>
                      <p><a href="#" class="btn btn-primary" role="button">Visit page</a></p>
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
                        <div class="logo">
                                <a herf="index.html"><img src="images/logo.png"></a>
                        </div>
                    </div>
                <div class="col-md-6">
                    <div class="follow">
                    <div class="text-center">
                        <ul>
                            <li><a href="">facebook</a></li>
                            <li><a href="">twitter</a></li>
                            <li><a href="">youtube</a></li>
                            <li><a href="">instagram</a></li>
                            
                        </ul>
                    </div>
                    </div>
                </div>
            </div>
            </div>
            <div class="ro">
                <div class="footerbottom">
                    <center><p><small>© 2019 knightswithbats.com, Limited. All rights reserved</small></p></center>
                </div>
            </div>
        </div>
    </footer>
    
    
    <script src="jquery/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
