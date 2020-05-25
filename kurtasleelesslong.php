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
    background-image: url("images/kurta.jpg");
    background-size: cover;
    background-attachment: fixed;
    background-repeat: no-repeat;
            }
      .section-heading{
			background-color:#23415c;
			color:white;
			padding:3px;
			box-shadow:0 0 10px gray;
            text-align: center;
		}
      .jain-container .navbar-default{
position: fixed;    
top: 0;
background: transparent;
border: none;    
}
.navbar-nav.nav li a{
    color: #fff;
    font-size: 20px;
    font-family: 'Noto Serif', serif;
    }
#header li a:hover,#header li a:active
{
    color:orange;
}
.dropdown:hover>.dropdown-menu{
    display: block;
    background-color: black;

}
.dropdown .dropdown-menu li a{
    font-size: 20px;
    color: #FFF;
    background-color: black
}
.media-carousel .carousel-control{
    height:0;
    top: 50%;   
}
.media-carousel .carousel-control i{
    width: 40px;
    height: 40px;
    border-radius: 80%;
    background-color: #000000;
    padding: 10px;
    vertical-align: middle;
}
.carousel-caption h1{
    margin-top: -37%;
    font-family: 'Vast Shadow', cursive;
    animation-delay: 1s;
}
.carousel-caption p{
    animation-delay: 2s;
    font-size: 25px;
    font-family: 'Ultra', serif;
}
.navbar-toggle .icon-bar{
    position: relative;
    transition: all 500ms ease-in-out;
    width: 30px;
    height: 2px;
}
.navbar-toggle .icon-bar:nth-of-type(1){
    background-color: #fff;
}
.navbar-toggle .icon-bar:nth-of-type(2){
    top: 1px;
    background-color: #fff;
}
.navbar-toggle .icon-bar:nth-of-type(3){
    top: 2px;
    background-color: #fff;
}
.navbar-toggle.active .icon-bar:nth-of-type(1){
        top: 6px;
        transform: rotate(45deg);

}
.navbar-toggle.active .icon-bar:nth-of-type(2){
    background-color: transparent;
}
.navbar-toggle.active .icon-bar:nth-of-type(3){
        top: -6px;
        transform: rotate(-45deg);

}
@media only screen and (max-width:768px){
    .navbar-collapse{
        position: absolute;
        top: 50%;
        right: 0;
        clip-path:circle(0px at top right);
        background-color: rgba(0,0,0,0.79);
        transition: all 500ms ease-in-out;
        width: 100%;
    }
.collapse{
        clip-path:circle(150% at top right);
        border: none;
    }
.navbar-nav.nav li a{
        margin: 10px;
    }
    
.navbar-toggle{
    top: -3em;
    }
.carousel-caption h1{
    margin-top: -80%;
    font-size: 30px;
    }
}
.header-border{
    height: 100px;
    border: 0;
    border-bottom: 1px solid #514C4D;
}
.dropdown-toggle .dropdown-menu:nth-of-type(1){
        background-color: transparent;
}

.dropdown-toggle .dropdown-menu:nth-of-type(2){
        background-color: transparent;
}

	.form-div{
			background-color:rgb(0,0,0,0.7);
			padding:5px 10px 50px 10px;
            margin-bottom: 50px;
			box-shadow:0 0 10px gray;
            color: #fff;
            margin-top: 150px;
		}    
		       /*for footer */
    .footer-main-div{
        width: 100%;
        height: auto;
        margin: auto;
        background: #272727;
        padding: 20px 0px; 
        position: absolute;
    }
    .footer-social-icons{
        width: 100%;
        height: auto;
        margin: auto;
    }
    .footer-social-icons ul{
        margin: 0;
        padding: 0;
        text-align: center;
    }
    .footer-social-icons ul li{
        display: inline-block;
        width: 50px;
        height: 50px;
        margin: 0 10px;
        border-radius: 100%;
        background: #fff;
    }
    .footer-social-icons ul li a{
        background:#fff;
        font-size: 25px;
        border: 3px solid #fff;
        overflow: hidden;
    }
    .footer-social-icons ul li a i{
        line-height: 200%
    }
    .footer-social-icons ul li a .fa{
        position: relative;
        color: #262626;
        transition: .9s;
        color: #272727;
    }
    .footer-social-icons ul li a:hover .fa{
        transform: rotateY(360deg);
        
    }
    .cards{
        margin-left: 22px;
    }
    .cards h3{
        color: #fff;
    }
    .cards h4 a{
        color: #fff;
        font-size: 20px;
    }
     /*for scrolling */
    .navbar-default.scrolled{
        background:#23415C;
        }
  </style>
	 <script>
            $(window).scroll(function(){
	$('nav').toggleClass('scrolled', $(this).scrollTop() > 100);
});
        </script>

</head>
<body bg color="gray">
<!---Create container------>
        <div class="jain-container">
            <!---Create navbar------>
        <nav class="nav navbar-default navbar-fixed-top">
            <div class="container-fluid header-border" style="padding-left: 0; padding-right: 0;">
               <div class="container" style=" margin-top: 2em; padding-left: 0; padding-right: 0;">
                   <div class="col-md-3">
                <a href="Tailorfront.php"><img  class=" img-thumbnail" src="images/headimg.png" style="width: 60px; marging-right:20px;"></a>
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
                                         <li><a href="collection.php">COLLECTION</a></li>
                                         <li><a href="aboutus.php">ABOUT US</a></li>
                                         <li><a href="contactus.php">CONTACT US</a></li>
                                    <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">LOGIN<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="AdminLogin.php">Admin login</a></li>
                                        <li><a href="CustomerLogin.php">Customer Login</a></li>
                                        <li><a href="TailorLogin.php">Tailor Login</a></li> 
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">REGISTRATION<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="CustomerRegistrationform.php">Customer Registration</a> </li>
                                        <li><a href="Tailorregistrationform.php">Tailor Registration</a></li> 
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    <!---end Create navbar------>
    
<div class="container" >
<div class="row">
<div class="col-md-offset-2 col-md-8">
<form action="" method="POST">
		<div class="form-div">
            <div class="section-heading">
                <h2 style="text-align:center">KURTA (MEASUREMENT)</h2>
            </div>
            <div class="form-group details-div">
              <h4><label for="Bust">Bust:</label></h4>
              <input type="Bust" class="form-control"  name="bust" id="chest" placeholder="Enter bust size">
            </div>
             <div class="form-group details-div">
              <h4><label for="waist">waist:</label></h4>
              <input type="waist" class="form-control" name="waist" id="waist" placeholder="Enter waist size">
            </div>	
            <div class="form-group details-div">
                <h4><label for="hip"> Hip:</label></h4>
	            <input type="hip" class="form-control" name="hip" id="hip" placeholder="Enter hip size">
            </div>
            <div class="form-group details-div">
                <h4><label for="length">Length:</label></h4>
                <input type="length" class="form-control" name="length" id="length" placeholder="Enter length">
            </div>
            <label style="font-size:18px;"><b>Size:</b></label>
            <select class="select">
              <option>Select</option>
              <option>mall</option>
              <option>Medium</option>
              <option>Large</option>
              <option>X-Large</option>
              <option>XX-Large</option>
            </select>
            <label style="margin-left:30px;font-size:18px;"><b>Kurta Type:</b></label>
            <select class="select">
              <option>Select</option>
              <option>Sleeveless Long Kurta</option>
              <option>Sleeveless Mini Kurta</option>
              <option>Sleeveless short Kurta</option>
              <option>Sleeve Long Kurta</option>
              <option>Sleeve Mini Kurta</option>
              <option>Sleeve Shorty Kurta</option>
            </select><br><br><br>

	<button type="submit" class="btn btn-primary " name="submit" id="submit">Submit</button>
	<button type="reset" class="btn btn-danger " name="reset" id="reset">Reset</button>
    <button type="Help" class="btn btn-primary " name="Help" id="Help" style="margin-left:500px;">Help</button>
	
    </div>
</form>
    </div>
    </div>
    </div>
     <!----Footer ------>
        <div class="footer-main-div">
            <div class="footer-social-icons">
                <ul>
                    <li><a href="#" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                </ul>
            </div>
                <br><hr>
            <div class="col-md-2 cards" >
                  <h3>GET TO KNOW US</h3><br>
                    <h4><a href="contactus.php">Contact Us</a></h4>
                    <h4><a href="aboutus.php">About Us</a></h4>
                    <h4 ><a href="#">CTS Stories</a></h4>
                </div>
                <div class="col-md-2 cards">
                  <h3>HELP</h3><br><br>
                    <h4><a href="#">Payment</a></h4>
                    <h4><a href="#">Shipping</a></h4>
                        <h4><a href="#">Cancalition & Return</a></h4>
                </div>
                <div class="col-md-2 cards">
                  <h3>POLICY</h3><br><br>
                    <h4><a href="#">Return Policy</a></h4>
                    <h4><a href="#">Security</a></h4>
                    <h4><a href="#">Privacy</a></h4>
                </div>
                <div class="col-md-2 cards">
                  <h3>LET US HELP YOU</h3><br>
                    <h4><a href="#">Your Account</a></h4>
                    <h4><a href="#">Return Center</a></h4>
                    <h4><a href="#">Help</a></h4>
                </div>
                <div class="col-md-3 cards">
                    <h3>REGISTERED OFFICE ADDRESS</h3><br>
                 </div>
        </div>

	</body>
	</html>