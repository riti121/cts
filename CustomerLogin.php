<?php
session_start();
$message="";
if(isset($_POST['login']))
{
	$userid=$_POST['userid'];
    $password=$_POST['password'];
    $con=mysqli_connect("localhost","root","","tailor");
    $query="select * from Customerregistration where email='$_POST[userid]' && password='$_POST[password]' && status='v'";
    $result=mysqli_query($con,$query);
    $n=mysqli_num_rows($result);
    if($n==1)
    {
        $r=mysqli_fetch_array($result);
        $_SESSION['email']=$userid;
        $_SESSION['pincode']=$r['pincode'];
        mysqli_close($con);
        header("location:customerdash.php");
    }
    $message="***Invalid User Information***";
    }

?>
<!DOCTYPE html>
<html>
<head>
  <title>Customer Login</title>
    <!---title icon ---->
    <link href="images/titlelogo.ico" rel="icon" type="image/ioc">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
   <link href="https://fonts.googleapis.com/css?family=Vast+Shadow" rel="stylesheet">
    <!----External fonts ------->
        <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,700" rel="stylesheet">
  <style>
      body{
          background-image: url("images/img46.jpg");  
          background-size: cover;
          background-attachment: fixed;
          background-repeat: no-repeat;
      }
      
.jain-container .navbar-default{
    position: absolute;
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
      .section-heading{
    background-color:#23415c;
    color:white;
    padding:3px;
    box-shadow:0 0 10px gray;
      }
      .form-div{
			background-color:rgba(0,0,0, 0.5);
			padding:5px 10px 5px 10px;
			box-shadow:0 0 10px gray;
        
		}    
        .fa{
          padding:20px;
          font-size: 30px;
          color: #FFF;

      }
      .heading{
          color: #FFF;
          font-size: 20px;
      }
      .navbar-toggle .icon-bar{
    position: relative;
    transition: all 500ms ease-in-out;
    width: 30px;
    height: 2px;
}
      .msg{
          color: red;
          font-size: 30px;
      }
     
  </style>
    <script>
      function myFunction(){
          var x=document.getElementById("password");
          if(x.type==="password"){
              x.type="text";
          }
          else{
              x.type="password";
          }
          }

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
                <a href="FrontTailor.html"><img  class="img-responsive img-thumbnail" src="images/headimg.png" style="width: 60px;"></a>
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
                        <ul class="nav navbar-nav navbar-right" id="header" style="float:right" >
                                     <li ><a href="Tailorfront.php">HOME</a></li>
                                     <li><a href="index.php">COLLECTION</a></li>
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
                                        <li><a href="Tailorregistrationform.php">Tailor Registration</a></li> 
                                       </ul>
                                    </li>
 
                                </ul>
                        </div>
                   </div>
                </div>
            </div>
        </nav>
    </div>
<section>
<div class="container"  style="margin-top:150px;">
<div class="row">
<div class="col-md-offset-2 col-md-8">
<form action="CustomerLogin.php" method="POST" onsubmit="return validation()">
		<div class="form-div">
  <div class="section-heading"><h2 style="text-align:center;font-family: 'Vast Shadow', cursive;">CUSTOMER LOGIN</h2></div>
  
    <div class="form-group details-div">
      <h4 class="heading"><label for="userid">UserId</label></h4>
      <input type="userid" class="form-control" name="userid" id="userid" placeholder="Enter userid">
    </div>
	<div class="form-group details-div">
        <h4 class="heading"><label for="password">Password</label></h4>
        <input type="password" class="form-control" name="password" id="password" placeholder="Enter password"><br />
         <div  class="msg"><?php echo $message; ?></div>
        <h4 class="heading"><input type="checkbox" onclick="myFunction()">Show Password</h4>
    </div>
            
            <button type="login" class="btn btn-primary" name="login" id="login">Login</button>
     <a href="changpassword.php" class="btn btn-primary" role="button" id="change" name="change" value="change">Changepassword</a><br />
    
	            <h4 class="heading"><a href="forgetpassword.php" style="color:white; text-decoration:none;">Forget Password?</a></h4>
               
    </div>
	</form>
    </div>
</div>
</div>	
    </section>
    <script type="text/javascript">
        function validation{
            var a=document.getElementById('userid').value;
            var b=document.getElementById('password').value;
            if(a==""){
                alert("**Please fill the userid");
            }
            if(b==""){
                alert("**Please fill the password");
            }
        }
        }
    </script>
	</body>
	</html>