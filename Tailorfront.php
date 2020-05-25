<html>
    <head>
    <meta charset="utf-8">
    <title>Customized tailoring System</title>
        <link href="images/titlelogo.ico" rel="icon" type="image/ioc">
        <!----For CSS ------->
        <link href="style.css" rel="stylesheet">
    <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
    <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-----icon ------->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <!---For animate ----->
            <link href="stylesheet/animate.css" rel="stylesheet" type="text/css">
        
    <!----External font----->
        <link href="https://fonts.googleapis.com/css?family=Vast+Shadow" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Ultra" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lily+Script+One" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
<style>
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
        /* for animated icon*/
    .scroll{
        position:absolute;
        top: 90vh;
        left: 50%;
        transform: translate(-50%,-50%);
        width: 100%;
        height: 150px;
        text-align: center;
        line-height: 120px;
        font-size: 55px;
        overflow: hidden;
    }
    .scroll .fa
    {
        color: #fff;
        margin: 0;
        padding: 0;
        animation: animate 1.5s linear infinite;
    }
    @Keyframes animate
    {
        0%{
            transform: translateY(-50px);
            text-shadow: 0 50px 0 #fff;
        }
        20%{
            transform: translateY(0px);
            text-shadow: 0 10px 0 #fff;
        }
        40%{
            transform: translateY(0px);
            text-shadow: 0 -10px 0 #fff;
        }
        60%{
            transform: translateY(0px);
            text-shadow: 0 0px 0 #fff;
        }
        100%{
            transform: translateY(100px);
            text-shadow: 0 -50px 0 #fff;
            
        }
    }    
    .circle:before{
        content: '';
        position: absolute;
        color: #fff;
        font-family: arial;
        font-size: 10px;
        left: 5px;
        top: 10px;
    }
    
    /* for animation */
        section{
        width: 100%;
        height: 70vh;
            display: flex;
            align-items:center;
            justify-content: center;
    }
        section h1{
            margin: 0;
            padding: 0;
            text-align: center;
            font-family: sans-serif;
            font-size:5em;
            color: #fff;
            padding: 10px;
        }
      section:nth-child(1)
        {
        background:#0aa6ff;
            
        }
     section:nth-child(2)
        {
        background:#e1564c;
        }
    section:nth-child(3)
        {
        background: #0aa6ff;
        
        }
    section:nth-child(4)
        {
        background:#e1564c;
        }
     section:nth-child(5)
        {
        background:#E3526C;
        }
     section h1 .black{
        color: black;
        font-family: 'Lily Script One', cursive;
        font-size: 120px;
    }
    /*for footer */
    .footer-main-div .container{
        width: 100%;
        height: auto;
        margin: auto;
        background: #272727;
        padding: 20px 0px; 
        position: absolute;
    }
    
    .footer-main-div .container .btn-default{
        margin-left: 90%;
        background:rgba(0,0,0,0.1%);
    }
    .footer-main-div .container .btn-default a{
        text-decoration: none;
        color:#fff; 
    }
    .footer-social-icons .container{
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
    <body>
    <!---Create container------>
        <div class="jain-container">
            <!---Create navbar------>
        <nav class="nav navbar-default navbar-fixed-top">
            <div class="container-fluid header-border" style="padding-left: 0; padding-right: 0;">
               <div class="container" style=" margin-top: 2em; padding-left: 0; padding-right: 0;">
                   <div class="col-md-3">
                <a href="Tailorfront.php"><img  class="img-thumbnail" src="images/headimg.png" style="width: 60px; marging-right:20px;"></a>
                    </div>
                    <div class="col-md-9" style="padding-left: 0; padding-right: 0;">
                        <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse" style="background-color: transparent; border:none;">
                                    <span class="icon-bar">Menu</span>
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
            <!----CTS heading on a page------->
            <div class="carousel media-carousel" id="media" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="item active">
                        <img  class="img-responsive" src="images/frontimg1.jpg" style="height:670px;width:100%">
                        <div class="carousel-caption">
                            <h1 class="animated bounceInLeft">CUSTOMIZED <small style="color: #fff;">Tailoring System</small></h1>
                            <p class="animated rotateInDownLeft">Tailored to suit you best!</p>
                        </div>
                    </div>
                    <div class="item">
                        <img  class="img-responsive" src="images/frontimg3.jpg" style="height:670px;width:100%">
                            <div class="carousel-caption">
                            <h1 class="animated bounceInRight">CUSTOMIZED<small style="color: #fff;">Tailoring system</small></h1>
                            <p class="animated rotateInUpRight">Tailored to suit you best!</p>
                        </div>
                    </div>
                </div>
                <a class="left carousel-control" data-slide="prev" href="#media"><i class="fa fa-chevron-left"></i></a>
                <a class="right carousel-control" data-slide="next" href="#media"><i class="fa fa-chevron-right"></i> </a>
            </div> 
            <!---- End CTS heading on a page------->
            
        <!---animated icon ----->
        <div class="scroll">
            <i class="fa fa-angle-down" aria-hidden="true"></i>
        </div>
        <!---End animated icon ----->
        
        </div>
        <script>
            $(document).ready(function(){
                $(".navbar-toggle").on("click",function(){
                    $(this).toggleClass("active")
                })
            })
        </script>
        <!------Start Animation scroll ------->
    <div class="jain-container">

        <section >
            <h1>Choose your<br><span class="black">Trend</span></h1>
            </section>
         <section >
             <h1>We connect to <br>you to the  <span class="black">designers</span></h1>
             </section>
         <section >
             <h1>They make your<br> trand <span class="black">style</span></h1>
             </section>
         <section >
             <h1>And pick on your<br><span class="black">door</span></h1>
             </section>     
         <script src="stylesheet/TweenMax.js"></script>
    <script src="stylesheet/ScrollToPlugin.js"></script>
    <script src="stylesheet/EaselPlugin.js"></script>
    <script src="stylesheet/animate-scroll.js"></script>
        <script type="text/javascript">
            $(document).animateScroll();    
        </script>
        </div>
        <!------End Animation scroll ------->
        <!---- Start Footer ------>
        <div class="footer-main-div">
            <div class="container">
                <button class="btn btn-default btn-lg">
                    <a href="#">Back to top</a>
                </button>
            <div class="footer-social-icons">
                <ul>
                    <li><a href="#" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                </ul>
            </div><hr>  
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
        </div>    
        <!----End footer----->
        
    <!--Latest compiled JavaScript-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="js/wow.min.js"></script>
    </body>
</html> 