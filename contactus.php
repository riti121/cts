<!DOCTYPE html>
<html lang="en">
<head>
  <title>Contact Us</title>
    
    <link href="images/titlelogo.ico" rel="icon" type="image/ioc">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--External fonts ---->
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,700" rel="stylesheet">

  <style>
      .navbar{
          width: 100%;
          border-radius:0;
          background-color:transparent;
          color: #FFF;
          padding: 2% 0;
          font-size: 1.4em;
          border: 0;
          position: fixed;
          
      } 
       #header li a:hover,#header li a:active{
          color: orange;
      }
      .img{
          height: 60px;
          width: 90px;
      }
     .navbar-inverse .navbar-nav li a{
          color: #D5D5D5;
          font-family: 'Noto Serif', serif;
         text-transform: uppercase;
      }
      
       .heading{
          color:black;
           font-size:50px;
           font-family: cursive;
           padding-top:80px;
      }
       
      .container .contactimg{
          width: 100%;
          height: 400px;
      }
      #contactlinks{
          color: #FFF;
          background-color:#e1564c ;
;
          text-align: center;
      }
       #contactlinks h4{
          color: #FFF;
      }
      .dropdown:hover>.dropdown-menu{
     display: block;
     color: black;
          background-color: black;
}
     .dropdown .dropdown-menu li a{
    font-size: 20px;
    color:white;
     background: black;
    font-family: 'Noto Serif', serif;
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
    </style>
      </head>
        <body>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>  
                    <a href="Tailorfront.php"><img  class=" img-thumbnail" src="images/headimg.png" style="width: 60px; margin-left: 90px;"></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav navbar-right " id="header">
                                <li><a href="Tailorfront.php">Home</a></li>
                                <li><a href="index.php">Collection</a></li>
                                <li ><a href="aboutus.php">About us</a></li>
                                <li ><a href="contactus.php">Contact us</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Login<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="AdminLogin.php">Admin login</a> </li>
                                        <li><a href="CustomerLogin.php">Customer Login</a> </li>
                                        <li><a href="TailorLogin.php">Tailor Login</a> </li> 
                                    </ul>
                                </li>
                                 <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Registration<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="CustomerRegistrationform.php">Customer Registration</a> </li>
                                        <li><a href="Tailorregistrationform.php">Tailor Registration</a> </li> 
                                    </ul>
                                </li>
                        </ul>
                </div>
            </div>
    </nav>
            <div class="col-md-13">
                    <img src="images/img49.jpg" class="contactimg" style="height:670px;width:100%">
            </div>
        <div id="contactlinks">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
				        <h2><i class="fa fa-map-marker" style="font-size:26px"></i>Sunder Deep Engineering college, Ghaziabad 201001</h2>
                    </div>
                        <div class="col-sm-4">
                            <h3><i class="fa fa-whatsapp" style="font-size:26px"></i>819 300 7865</h3>
                            <h3>&nbsp<i class="fa fa-mobile-phone" style="font-size:26px"></i> +91 999 069 0148, +91 819 300 7865, +91 901 320 2120</h3>
                        </div>
                       <div class="col-sm-4">
                            <h4><i class="fa fa-envelope" style="font-size:26px"></i>cts@customizedtailoringsystem.com</h4>
				            <h4><i class="fa fa-facebook-square" style="font-size:26px"></i> 
                            <a href="https://www.facebook.com/customizedtailoringsystem/" target="_blank">Customized Tailoring System</a></h4>
				            <h4><i class="fa fa-instagram" style="font-size:26px"></i> 
                            <a href="https://www.instagram.com/customizedtailoringsystem/" target="_blank">Custmized Tailoring System</a></h4>
				            <h4><i class="fa fa-twitter-square" style="font-size:26px"></i> <a href="#">Customized tailoring System</a></h4>
                        </div>
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