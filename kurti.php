<!DOCTYPE html>
<html lang="en">
<head>
  <title>measurement3 form</title>
    
    <link href="images/titlelogo.ico" rel="icon" type="image/ioc">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
	
		
body{
    background-image: url("images/customerReg.jpg");
    background-size: cover;
    background-attachment: fixed;
    background-repeat: no-repeat;
            }
      .jain-container .navbar-default{
    top: 0;
    background:transparent;
    border: none;   
}
.navbar-nav.nav li a{
    color: #fff;
    font-size: 20px;
    font-family: 'Noto Serif', serif;
}
     #header{
    float: right;
    padding: 10px;
}
#header li a{
     color: #fff;;
}
#header li a:hover,#header li a:active
{
 color: orange;
} 
#header .dropdown .dropdown-menu li a{
    background-color:  black;
}
.dropdown:hover>.dropdown-menu{
    display: block;
    color: black;
    background-color: black;
}   
.section-heading{
    background-color:#23415c;
    color:white;
    padding:3px;
    box-shadow:0 0 10px gray;
    font-family: ALEGERIAN;
        }

.form-div{
    background-color:rgba(0,0,0,0.5);
    padding:5px 10px 5px 10px;
    box-shadow:0 0 10px gray;
    margin-bottom: 20px;
    margin-top: 120px;
		      }  
.heading{
    color: #FFF;
    font-size:25px;
}
      .heading2{
      color: #FFF;
     font-size:25px;
     margin-left:250px;
}
      .select{
          font-size: 15px;
      }
		</style>	
</head>
<body bg color="gray">
     <!---Create container------>
        <div class="jain-container">
            <!---Create navbar------>
        <nav class="nav navbar-default navbar-fixed-top">
            <div class="container-fluid header-border" style="padding-left: 0; padding-right: 0;">
               <div class="container" style=" margin-top: 2em; padding-left: 0; padding-right: 0;">
                   <div class="col-md-3">
                <a href="Tailorfront.php"><img  class="img-responsive img-thumbnail" src="images/headimg.png" style="width: 60px;"></a>
                    </div>
                    <div class="col-md-9" style="padding-left: 0; padding-right: 0;">
                        <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse" style="background-color: transparent; border:none;">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                        </div>
                        <div class="collapse navbar-collapse">
                                <ul class="nav navbar-nav navbar-right" id="header">
                                     <li><a href="Tailorfront.php">HOME</a></li>
                                     <li><a href="#">COLLECTION</a></li>
                                     <li><a href="aboutus.php">ABOUT US</a></li>
                                     <li><a href="contactus.php">CONTACT US</a></li>
                                   <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">LOGIN<b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="AdminLogin.php">Admin login</a> </li>
                                            <li><a href="CustomerLogin.php">Customer Login</a> </li>
                                            <li><a href="TailorLogin.php">Tailor Login</a> </li> 
                                        </ul>
                                    </li>
                                     <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">REGISTRATION<b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="CustomerRegistrationform.php">Customer Registration</a> </li>
                                            <li><a href="Tailorregistrationform.php">Tailor Registration</a> </li> 
                                        </ul>
                                    </li>
                                </ul>
                        </div>
                   </div>
                </div>
            </div>
        </nav>
    </div>

<div class="container" >
<div class="row">
<div class="col-md-offset-2 col-md-8">
<form action="" method="POST">
		<div class="form-div">
  <div class="section-heading"><h2 style="text-align:center">KURTI(MEASUREMENT)</h2></div>
  
    <div class="form-group details-div">
      <h4 class="heading"><label for="Bust">Bust:</label></h4>
      <input type="Bust" class="form-control"  name="bust" id="chest" placeholder="Enter bust size">
    </div>
	 <div class="form-group details-div">
      <h4 class="heading"><label for="waist">waist:</label></h4>
      <input type="waist" class="form-control" name="waist" id="waist" placeholder="Enter waist size">
    </div>
	
    <div class="form-group details-div">
    <h4 class="heading"><label for="hip"> Hip:</label></h4>
	<input type="hip" class="form-control" name="hip" id="hip" placeholder="Enter hip size">
            </div>
            <div class="form-group details-div">
     <h4 class="heading"><label for="length">Length of Kurta:</label></h4>
      <input type="length" class="form-control" name="length" id="length" placeholder="Enter length"></div>
             <div class="form-group details-div">
    <h4 class="heading"><label for="shoulder">Shoulder:</label></h4>
	<input type="shoulder" class="form-control" name="shoulder" id="shouder" placeholder="Enter shoulder size">
            </div>
   
	 <div class="form-group details-div">
           <label class="heading"><b>Size:</b></label>
        <select class="select">
          <option>Select</option>
          <option>Small</option>
          <option>Medium</option>
          <option>Large</option>
          <option>X-Large</option>
          <option>XX-Large</option>
            </select>
          <label class="heading2"><b>Kurta Type:</b></label>
            <select class="select">
          <option>Select</option>
          <option>Long Kurta</option>
          <option>Mini Kurta</option>
          <option>Short Kurta</option>
            </select>
            	 
                     <label class="heading"><b>Sleeve:</b></label>
            <select class="select">
          <option>Select</option>
          <option>Sleeveless Long Kurta</option>
          <option>Sleeveless Mini Kurta</option>
          <option>Sleeveless short Kurta</option>
          <option>Sleeve Long Kurta</option>
          <option>Sleeve Mini Kurta</option>
          <option>Sleeve Short Kurta</option>
            </select><br>
         <div class="form-group details-div">
    <h4 class="heading"><label for="sleevelength">Sleeve Length:</label></h4>
	<input type="sleevelength" class="form-control" name="sleevelength" id="sleevelength" placeholder="Enter sleevelength">
            </div>
    
            </div>
            
	<button type="submit" class="btn btn-primary " name="submit" id="submit">Submit</button>
	<button type="reset" class="btn btn-danger " name="reset" id="reset">Reset</button>
    <a href="helpforkg.php" class="btn btn-primary" role="button">Help for Measurement</a>
        

    </div>
</form>
    </div>
    </div>
    </div>

     </body>
	</html>