<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width = device-width, initial-scale = 1">
    
    <title>Register yourself</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" href="style1.css">
<script src="jquery/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script type="text/javascript">
	function validate()
	{   
	     var corr= /^[A-Za-z-,]+(\s{0,1}[a-zA-Z, ])*$/;
        	
		alert("CONFIRM SUBMISSION");
		
		var h=document.getElementById('name').value;
		
        if(h=='')
        {
            alert("Name should not be empty")
            return false;
        }

		if(h.length>25)
		{
			alert("PLEASE ENTER CORRECT LENGHT OF NAME [LESS THAN 25]");
			return false
		}
		if(h.length<3)
		{
			alert("PLEASE ENTER CORRECT LENGHT OF NAME [MORE THAN 3]");
			return false
		}
		if(!h.match(corr))
		{
			alert("PLEASE USE ALPHABETS IN NAME [NOT NUMBERS]");
			return false
		}
		
		h=document.getElementById('email').value;
        if(h=='')
        {
            alert("USERNAME SHOULD NOT BE EMPTY")
            return false;
        }
	if(h.indexOf('@')==0)
	{
		alert("POSITION OF @ SHOULD NOT BE AT 1 IN USERNAME");        
		return false;
	}
	
	if((h.charAt(h.length-4)!='.')&&(h.charAt(h.length-3)!='.'))
	{
	 alert("POSITION OF . IS INCORRECT IN USERNAME");
      return false	  
	}	
	
	h=document.getElementById('pass').value;
    if(h=='')
        {
            alert("PLEASE ENTER PASSWORD")
            return false;
        }
	if(h.length<7)
	{
		alert("PLEASE ENTER CORRECT LENGHT OF PASSWORD [MORE THAN 7]");
        return false
	}
   
    if(h.search(/[A-Z]/)==-1)
    {
      alert("PLEASE USE ATLEAST ONE UPPER CASE LETTER IN PASSWORD");
      return false;
    }

    if(h.search(/[a-z]/)==-1)
    {
      alert("PLEASE USE ATLEAST ONE LOWER CASE LETTER IN PASSWORD");
      return false;
    }
    
    len=h.length;
    for (var i=0;i<len; ++i) 
    {
     if (h.charAt(i) === ' ') 
     {
        alert('PASSWORD SHOULD NOT HAVE SPACES');
        return false;
     }
    }

    h=form.elements["gen"].value;
    if(!h)
    {
        window.alert("PLEASE SELECT GENDER ");
        return false;
    }
	
    h=document.getElementById('phn').value;
   if(!h)
    {
        window.alert("PLEASE ENTER PHONE NO. ");
        return false;
    }

    if(h.isNaN)
    {
        window.alert("PLEASE ENTER NUMERIC VALUES IN NO. [NOT ALPHABETS] ");
        return false;
    }
    
     if(h.length<3)
    {
        alert("PLEASE ENTER CORRECT LENGHT OF PHONE NO, [MORE THAN 3]");
        return false
    }
	}
</script>

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
        <div class="page-header">
            <h2><a href="#">Home</a> > Sign Up </h2>
        </div>
            <div class="mania text-center"><h1>Register Yourself Here </h1></div>
    </div>
    <form class="signup" action="registerp.php" method="post" name="form">
            <button type="button" class="btn btn-lg btn-primary"  disabled="disabled">Your Name</button>
            <input type="text" class="fname" name="fname" id="name" placeholder="Full Name" value=""><br><br>
            <button type="button" class="btn btn-lg btn-primary" id="uname" disabled="disabled">User name</button>
            <input type="text" class="fmail" name="fmail" id="email" placeholder="example@domain"><br><br>
            <button type="button" class="btn btn-lg btn-primary" disabled="disabled">Password</button>
            <input type="password" class="fpass" name="fpass" value="" id="pass" placeholder="At least 1 uppercase, 1 lowercase, 1 number, 1 special character and minimum 8 characters"><br><br>
            <button type="button" class="btn btn-lg btn-primary" disabled="disabled">Gender</button>
            <label class="gen1" name="gen">Male</label>
            <input type="radio" class="fgen" name="gen" value="M" >
            <label class="gen1">Female</label>
            <input type="radio" class="fgen" name="gen" value="F" ><br><br>
            <button type="button" class="btn btn-lg btn-primary" disabled="disabled">Country</button>
            <select class="country" name="country">
                    <option value=Afghanistan>Afghanistan</option>
                    <option value=Akrotiri>Akrotiri</option>
                    <option value=Albania>Albania</option>
                    <option value=Algeria>Algeria</option>
                    <option value=Andorra>Andorra</option>
                    <option value=Angola>Angola</option>
                    <option value=Anguilla>Anguilla</option>
                    <option value=Antarctica>Antarctica</option>
                    <option value=Antigua>Antigua</option>
                    <option value=Argentina>Argentina</option>
                    <option value=Armenia>Armenia</option>
                    <option value=Aruba>Aruba</option>
                    <option value=Ashmore>Ashmore</option>
                    <option value=Australia>Australia</option>
                    <option value=Austria>Austria</option>
                    <option value=Azerbaijan>Azerbaijan</option>
                    <option value=Bahamas>Bahamas</option>
                    <option value=Bahrain>Bahrain</option>
                    <option value=Bangladesh>Bangladesh</option>
                    <option value=Barbados>Barbados</option>
                    <option value=Belarus>Belarus</option>
                    <option value=Belgium>Belgium</option>
                    <option value=Belize>Belize</option>
                    <option value=Benin>Benin</option>
                    <option value=Bermuda>Bermuda</option>
                    <option value=Bhutan>Bhutan</option>
                    <option value=Bolivia>Bolivia</option>
                    <option value=Bosnia>Bosnia</option>
                    <option value=Botswana>Botswana</option>
                    <option value=Bouvet>Bouvet</option>
                    <option value=Brazil>Brazil</option>
                    <option value=Brunei>Brunei</option>
                    <option value=Bulgaria>Bulgaria</option>
                    <option value=Burkina>Burkina</option>
                    <option value=Burma>Burma</option>
                    <option value=Burundi>Burundi</option>
                    <option value=Cambodia>Cambodia</option>
                    <option value=Cameroon>Cameroon</option>
                    <option value=Canada>Canada</option>
                    <option value=Cape>Cape</option>
                    <option value=Cayman>Cayman</option>
                    <option value=Chad>Chad</option>
                    <option value=Chile>Chile</option>
                    <option value=China>China</option>
                    <option value=Colombia>Colombia</option>
                    <option value=Comoros>Comoros</option>
                    <option value=Congo>Congo</option>
                    <option value=Costa-Rica>Costa-Rica</option>
                    <option value=Croatia>Croatia</option>
                    <option value=Cuba>Cuba</option>
                    <option value=Cyprus>Cyprus</option>
                    <option value=Czech>Czech</option>
                    <option value=Denmark>Denmark</option>
                    <option value=Dhekelia>Dhekelia</option>
                    <option value=Djibouti>Djibouti</option>
                    <option value=Dominica>Dominica</option>
                    <option value=Ecuador>Ecuador</option>
                    <option value=Egypt>Egypt</option>
                    <option value=Eritrea>Eritrea</option>
                    <option value=Estonia>Estonia</option>
                    <option value=Ethiopia>Ethiopia</option>
                    <option value=Fiji>Fiji</option>
                    <option value=Finland>Finland</option>
                    <option value=France>France</option>
                    <option value=Gabon>Gabon</option>
                    <option value=Gambia>Gambia</option>
                    <option value=Gaza>Gaza</option>
                    <option value=Georgia>Georgia</option>
                    <option value=Germany>Germany</option>
                    <option value=Ghana>Ghana</option>
                    <option value=Gibraltar>Gibraltar</option>
                    <option value=Glorioso>Glorioso</option>
                    <option value=Greece>Greece</option>
                    <option value=Greenland>Greenland</option>
                    <option value=Grenada>Grenada</option>
                    <option value=Guadeloupe>Guadeloupe</option>
                    <option value=Guam>Guam</option>
                    <option value=Guatemala>Guatemala</option>
                    <option value=Guernsey>Guernsey</option>
                    <option value=Guinea>Guinea</option>
                    <option value=Guinea-Bissau>Guinea-Bissau</option>
                    <option value=Guyana>Guyana</option>
                    <option value=Haiti>Haiti</option>
                    <option value=Honduras>Honduras</option>
                    <option value=Hong>Hong</option>
                    <option value=Kong>Kong</option>
                    <option value=Hungary>Hungary</option>
                    <option value=Iceland>Iceland</option>
                    <option value=India>India</option>
                    <option value=Indonesia>Indonesia</option>
                    <option value=Iran>Iran</option>
                    <option value=Iraq>Iraq</option>
                    <option value=Ireland>Ireland</option>
                    <option value=Israel>Israel</option>
                    <option value=Italy>Italy</option>
                    <option value=Jamaica>Jamaica</option>
                    <option value=Japan>Japan</option>
                    <option value=Jersey>Jersey</option>
                    <option value=Jordan>Jordan</option>
                    <option value=Juan>Juan</option>
                    <option value=de>de</option>
                    <option value=Nova>Nova</option>
                    <option value=Island>Island</option>
                    <option value=Kazakhstan>Kazakhstan</option>
                    <option value=Kenya>Kenya</option>
                    <option value=Kiribati>Kiribati</option>
                    <option value=Korea>Korea</option>
                    <option value=Kuwait>Kuwait</option>
                    <option value=Kyrgyzstan>Kyrgyzstan</option>
                    <option value=Laos>Laos</option>
                    <option value=Latvia>Latvia</option>
                    <option value=Lebanon>Lebanon</option>
                    <option value=Lesotho>Lesotho</option>
                    <option value=Liberia>Liberia</option>
                    <option value=Libya>Libya</option>
                    <option value=Liechtenstein>Liechtenstein</option>
                    <option value=Lithuania>Lithuania</option>
                    <option value=Luxembourg>Luxembourg</option>
                    <option value=Macau>Macau</option>
                    <option value=Macedonia>Macedonia</option>
                    <option value=Madagascar>Madagascar</option>
                    <option value=Malawi>Malawi</option>
                    <option value=Malaysia>Malaysia</option>
                    <option value=Maldives>Maldives</option>
                    <option value=Mali>Mali</option>
                    <option value=Malta>Malta</option>
                    <option value=Martinique>Martinique</option>
                    <option value=Mauritania>Mauritania</option>
                    <option value=Mauritius>Mauritius</option>
                    <option value=Mayotte>Mayotte</option>
                    <option value=Mexico>Mexico</option>
                    <option value=Moldova>Moldova</option>
                    <option value=Monaco>Monaco</option>
                    <option value=Mongolia>Mongolia</option>
                    <option value=Montserrat>Montserrat</option>
                    <option value=Morocco>Morocco</option>
                    <option value=Mozambique>Mozambique</option>
                    <option value=Namibia>Namibia</option>
                    <option value=Nauru>Nauru</option>
                    <option value=Nepal>Nepal</option>
                    <option value=Netherlands>Netherlands</option>
                    <option value=New-Zealand>New-Zealand</option>
                    <option value=Nicaragua>Nicaragua</option>
                    <option value=Niger>Niger</option>
                    <option value=Nigeria>Nigeria</option>
                    <option value=Niue>Niue</option>
                    <option value=Norway>Norway</option>
                    <option value=Oman>Oman</option>
                    <option value=Pakistan>Pakistan</option>
                    <option value=Palau>Palau</option>
                    <option value=Panama>Panama</option>
                    <option value=Paraguay>Paraguay</option>
                    <option value=Peru>Peru</option>
                    <option value=Philippines>Philippines</option>
                    <option value=Poland>Poland</option>
                    <option value=Portugal>Portugal</option>
                    <option value=Puerto>Puerto</option>
                    <option value=Qatar>Qatar</option>
                    <option value=Reunion>Reunion</option>
                    <option value=Romania>Romania</option>
                    <option value=Russia>Russia</option>
                    <option value=Rwanda>Rwanda</option>
                    <option value=Samoa>Samoa</option>
                    <option value=Saudi-Arabia>Saudi-Arabia</option>
                    <option value=Senegal>Senegal</option>
                    <option value=Seychelles>Seychelles</option>
                    <option value=Singapore>Singapore</option>
                    <option value=Slovakia>Slovakia</option>
                    <option value=Slovenia>Slovenia</option>
                    <option value=Solomon-Islands>Solomon-Islands</option>
                    <option value=Somalia>Somalia</option>
                    <option value=South-Africa>South-Africa</option>
                    <option value=Spain>Spain</option>
                    <option value=Sri-Lanka>Sri-Lanka</option>
                    <option value=Sudan>Sudan</option>
                    <option value=Suriname>Suriname</option>
                    <option value=Svalbard>Svalbard</option>
                    <option value=Swaziland>Swaziland</option>
                    <option value=Sweden>Sweden</option>
                    <option value=Switzerland>Switzerland</option>
                    <option value=Syria>Syria</option>
                    <option value=Taiwan>Taiwan</option>
                    <option value=Tajikistan>Tajikistan</option>
                    <option value=Tanzania>Tanzania</option>
                    <option value=Thailand>Thailand</option>
                    <option value=Timor-Leste>Timor-Leste</option>
                    <option value=Togo>Togo</option>
                    <option value=Tokelau>Tokelau</option>
                    <option value=Tonga>Tonga</option>
                    <option value=Trinidad>Trinidad</option>
                    <option value=and>and</option>
                    <option value=Tobago>Tobago</option>
                    <option value=Tunisia>Tunisia</option>
                    <option value=Turkey>Turkey</option>
                    <option value=Turkmenistan>Turkmenistan</option>
                    <option value=Tuvalu>Tuvalu</option>
                    <option value=Uganda>Uganda</option>
                    <option value=Ukraine>Ukraine</option>
                    <option value=United-Arab-Emirates>United-Arab-Emirates</option>
                    <option value=United-Kingdom>United-Kingdom</option>
                    <option value=United-States>United-States</option>
                    <option value=Uruguay>Uruguay</option>
                    <option value=Uzbekistan>Uzbekistan</option>
                    <option value=Vanuatu>Vanuatu</option>
                    <option value=Venezuela>Venezuela</option>
                    <option value=Vietnam>Vietnam</option>
                    <option value=Virgin-Islands>Virgin-Islands</option>
                    <option value=Yemen>Yemen</option>
                    <option value=Zambia>Zambia</option>
                    <option value=Zimbabwe>Zimbabwe</option>
            </select><br><br>
            <button type="button" class="btn btn-lg btn-primary" disabled="disabled">Mobile No.</button>
            <input type="text" class="fnumber" name="fnumber" value="" id="phn" placeholder="eg- +919887****88"><br><br>
            <button type="submit" class="btn btn-lg btn-primary" onclick="return validate()" id="subm">Register</button>
    </form>
    <br>
    <br>
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
