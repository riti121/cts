

<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <link href="images/titlelogo.ico" rel="icon" type="image/ioc">
    <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            <!---For animate ----->
        <link href="stylesheet/animate.css" rel="stylesheet" type="text/css">
    
        <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,700" rel="stylesheet">
<style>
    .col{
        background-image: url("dashbordimg/bacground.jpg");
        background-attachment: fixed;
        background-repeat: no-repeat;
        background-size: cover;
    }
     #header{
            width:100%;
            height: 160px;
            background-color:#23415c;
            color: white;
        }
    .heading{
        margin-top: 150px;
        font-size: 60px;
        font-family: 'Lobster', cursive;
        color: #23415c;
    }
      .paragraph{
        font-size: 50px;
        font-family: ALEGERIAN;
        margin-left: 40px;
        color: navy;
          text-align: center;
    }
    .paragraph1{
      font-size: 50px;
        font-family: ALEGERIAN;
        margin-left: 40px;
        margin-top: 20px;
        color: navy;
    }
    .head{
        font-size: 30px;
        font-family: Monotype-Corsiva;
        margin-left: 40px;
    }
   
     #adminlogo{
            background: white;
            border-radius: 50px;
            width: 90px;
            height: 70px;
            margin-top: 10px;
        }
     .ha{
           font-family: ALGERIAN;
            font-size: 40px;
            position: relative;
            margin-top: 15px;
        }
     .btn-success{
        float:right;
            margin-right: 5px;
            font-size: 20px;
        }
     .btn-primary{
        font-size: 20px;
        float: right;
        margin-right: 50px;
        
    }
    .h{
        text-align: center;
        color: #23415c;
        font-size: 60px;
        font-family: 'Lobster', cursive;
        
    }
    .panel{
        font-size:30px;
        font-family: ALENGERIAN;
        
    
    }
    .dashboard{
      font-family:Monotype corsiva;
      text-align: center;
      font-size: 60px;
        }   
    .btn{
        float: right;
          margin-right: 5px;
            font-size: 20px;
      background-color:greenyellow;
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
      .logout{
            float: right;
            font-size: 30px;
            color: white;
            margin-top: 50px;
        
        
        }
      a:hover {
  color:white;
  background-color:orange;
}
    </style>
      <script>
            $(window).scroll(function(){
	$('nav').toggleClass('scrolled', $(this).scrollTop() > 100);
});
        </script>

    </head>
      <body bg color="gray">
       <div id="header">
            <div class="row">
               <div class="col-md-2">
                   <img src="imgadmin/imgad.jpg" alt="adminlogo" id="adminlogo"></div>
               <div class="col-md-2">
                   <h1 class="ha">CUSTOMER DASHBOARD</h1>
               </div>
       
           <div class="col-sm-8">
               <a href="CustomerLogin.php" class="logout">Logout</a>
           </div>
       </div>
       
       
           
     </div>
          
          <br />
                   <a href="p.php" class="btn btn-success" role="button">See Tailors Details</a>
          <h1 class="dashboard">Choose measurement type</h1>
           <a href="mea.php" class="btn btn-success" role="button">Fill Measurement form</a>
           <a href="" class="btn btn-success" role="button">Call tailor at home for measurement</a>

            <div class="container">
     <div class="row">
         <div class="col-md-6">
             <h2 class="heading">Join the CTS and make your clothes design as you want</h2>
         </div>
         <div class="col-md-6">
             <img src="dashbordimg/images(10).jpg" class="img-circle">
         </div>
     </div>
        <h1 class="h"> What steps you can follow for the service</h1>
     <div class="col">
        <div class="row">
         
                 <h4 class="paragraph">For Measurement</h4>
               <div class="col-md-6">
                 <p class="head">1.CTS provides that if you know your measurement then fill the form which are available on a CTS.</p>
        
                 <p class="head">2.If you don't know the measurement then there are some videos are available, you can see it and learn how to measure ,and then fill the measurement form.</p>
                 <h4 class="paragraph"></h4>
            </div>
            <div class="col-md-6">
            
                 <p class="head">3.If you want that the any tailor came at your home for taking your measurement then you can go for that feature also. </p>
                             </div>
     </div>
     </div>
     <div class="row">
         <div class="col-md-7">
             <h1 class="heading">Our panel works like this</h1>
             <ul class="panel">
             <li>Registration</li>
             <li>Login</li>
             <li>Wait for to be Verified</li>
             <li>Start services</li>
             </ul>
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
          <!--Latest compiled JavaScript-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="js/wow.min.js"></script>

    </body>
</html>