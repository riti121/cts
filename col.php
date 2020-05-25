<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    .jain-container .navbar-default{
    position: absolute;
    top: 0;
    background-color:#23415c;
    border: none;
     position: fixed;
    
}
.navbar-nav.nav li a{
    color: #fff;
    font-size:20px;
      }
        
.dropdown:hover>.dropdown-menu{
    display: block;
    color: black;
}
      
      .navbar-brand{
          float:left;
          min-height: 45px;
          padding: 0 15px 5px;
      }
       
       .navbar-inverse li a:hover>.navbar-nav li a{
          color: #D5D5D5;
      }
       #header li a:hover,#header li a:active{
          color: orange;
      }
        #header .dropdown .dropdown-menu li a{
          color: black;
      }
      .navbar-default .navbar-nav li a{
          color: #D5D5D5;
      }
      .heading{
          font-size: 50px;
          font-family:ALEGERIAN;
          color: black;
        
      }
      .p{
          color:black;
          font-size: 30px;
          font-family: monotype Corsiva;
      }
      .img{
        height:200px;
          width: 1000px;
          margin-top:80px;
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
        margin-left: 40px;
    }
    .cards h3{
        color: #fff;
    }
    .cards h4 a{
        color: #fff;
        }
      .img{
          margin-top: 100px;
      }
      .img2{
          list-style: none;
        
    }
    </style>
    </head>
    <body>
        <div class="jain-container">
            <!---Create navbar------>
        <nav class="nav navbar-default navbar-fixed-top">
            <div class="container-fluid header-border" style="padding-left: 0; padding-right: 0;">
               <div class="container" style=" margin-top: 2em; padding-left: 0; padding-right: 0;">
                   <div class="col-md-3">
                <a href=""><img  class="img-thumbnail" src="images/headimg.png" style="width: 65px;"></a>
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
                        <ul class="nav navbar-nav" id="header"  >

                            <li class="dropdown">
                                    <a href="#" class="dropdown-toggle"  id="bkgchange"data-toggle="dropdown">Women<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="">Kurta</a> 
                                        <ul class="img2">
                                            <li class="dropdown"><a href="kurtadesign.php">Cotton Kurti</a></li>
                                            <li class="dropdown"><a href="silk.php">Net Kurti</a></li>
                                            <li class="dropdown"><a href="silk2.php">Silk Kurti</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="Salwar.php">Salwar</a> </li>
                                        <li><a href="Completesuit.php">Complete Suit-Salwar</a> </li> 
                                        <li><a href="shirt.php">Shirts</a></li>
                                       </ul>
                                    </li>
                                     <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Men<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="shirtsgdesign.php">Shirts</a> </li>
                                        <li><a href="trouser.php">Trousers</a> </li> 
                                        <li><a href="trouser.php">Kurta</a> </li> 
                                       </ul>
                                </li>
                            <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Kids<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="shirt1.php">Shirts</a> </li>
                                        <li><a href="trouser1.php">Trousers</a> </li> 
                                       </ul>
                                </li>
                            </ul>
                        </div>
                   </div>
                </div>
            </div>
        </nav>
             <div class="carousel slide" id="slider" data-ride="carousel" data-interval="3000">
                
                <div class="carousel-inner">
                    <ol class="carousel-indicators">
                        <li data-target="#slider" data-slide-to="0" class="active"></li>
                        <li data-target="#slider" data-slide-to="1"></li>
                        <li data-target="#slider" data-slide-to="2"></li>
                        <li data-target="#slider" data-slide-to="3"></li>
                    </ol>
                    <div class="item active">
                    <img src="images/images(35).jpg"  class="img" style="height:500px;width: 1500px">
                        <div class="carousel-caption">
                        <h1 class="heading">Beautiful collections of CTS</h1>
                            <p class="p">Life is not perfect but your outfit can be. </p>
                        </div>
                    </div>
                    <div class="item">
                    <img src="images/images(22).jpg" class="img" style="height:500px;width: 1500px">
                        <div class="carousel-caption">
                        <h1 style="font-family:Monotype Corsiva; color:black;font-size:60px">Just want to wear things that are you in different ways.</h1>
                        </div>
                    </div>
                    <div class="item">
                    <img src="images/images(33).jpg" class="img" style="height:500px;width: 1500px">
                    </div>
                    <a href="#slider" class="left carousel-control" data-slide="prev"><span class="icon-prev"></span> </a>
                    <a href="#slider" class="right carousel-control" data-slide="next"><span class="icon-next"></span></a>
                </div><!----end of carousel-inner ------->
                
             <!-----End carousel ----->
   
           
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
                  <h3>Get to Know Us</h3><br>
                    <h4><a href="contactus.php">Contact Us</a></h4>
                    <h4><a href="aboutus.php">About Us</a></h4>
                    <h4 ><a href="#">CTS Stories</a></h4>
                </div>
                <div class="col-md-2 cards">
                  <h3>HELP</h3><br>
                    <h4><a href="#">Payment</a></h4>
                    <h4><a href="#">Shipping</a></h4>
                        <h4><a href="#">Cancilation & Return</a></h4>
                </div>
                <div class="col-md-2 cards">
                  <h3>POLICY</h3><br>
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
                <div class="col-md-2 cards">
                    <h3>REGISTERED OFFICE ADDRESS</h3><br>
                 </div>
                 </div>     </div>
        </div>
    </body>
</html>