<?php
if(isset($_POST['submit']))
{
    
    
	$cname=$_POST['cname'];
    $address=$_POST['address'];
    $city=$_POST['city'];
    $pincode=$_POST['pincode'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];
    $con=mysqli_connect('localhost','root','','tailor');
    $res="SELECT * from Customerregistration where email='$email'";
    $user=mysqli_query($con,$res);
    $result=mysqli_num_rows($user);
    if($result>0)
         {
                echo "You are already register";
         }
    else{
    $query="INSERT INTO Customerregistration(cname, address,city,pincode,email,gender,mobile,password)VALUES('$cname','$address','$city','$pincode','$email','$gender','$mobile','$password')";
    mysqli_query($con,$query);
    mysqli_close($con);


   
}
?> 
<div class="alert alert-success col-lg-6 col-lg-push-3">
        Thank you for registration...you are successfully registered..
    </div>
<?php
}
?>
<html>
 <head>
    <meta charset="utf-8">
    <title>Customer Registration Form</title>
     <!---title icon ---->
    <link href="images/titlelogo.ico" rel="icon" type="image/ioc">
     
    <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery library -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-----icon ------->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    
     <!---External fonts------>
        <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
<style>
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
        }
    .section-heading h2{
        text-align: center;
        font-size: 35px;
        font-family: 'Lobster', cursive;
    }
.fa{
    padding:20px;
    font-size: 30px;
    color: #FFF;
        }
.form-div{
    background-color:rgba(0,0,0,0.5);
    padding:5px 10px 5px 10px;
    box-shadow:0 0 10px gray;
    margin-bottom: 20px;
    margin-top: 20px;
		      }  
.heading{
    color: #FFF;
        }
    
    .btn-danger{
        margin-left: 10px;
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
     
 <script type="text/javascript" >  
function validate() 
{  
	var msg;  
	if(document.myForm.password.value.length>5){  
    document.getElementById('ss').style.color="green";  
	  document.getElementById('ss').innerText="Good";   
	}  
	else{  
       document.getElementById('ss').style.color="red";  
	    document.getElementById('ss').innerText="poor";  
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
<section>
    <div class="container" style="margin-top:150px" >
        <div class="row">
            <div class="col-md-offset-2 col-md-8">
                <form name="myForm" action="CustomerRegistrationform.php" method="POST" onsubmit="return validation()">
		      <div class="form-div">
                <div class="section-heading"><h2 style>Customer Registration Form</h2></div>
                    <div class="form-group details-div">
                      <h4 class="heading"><label for="tailor name">Customer Name:</label></h4>
                      <input type="name" class="form-control"  name="cname" id="name" placeholder="Enter name">
                    </div>
                    <div class="form-groups details-div">
                        <h4 class="heading"><label for="class"> Address:</label></h4>
                        <input type="text" class="form-control" name="address" id="address" placeholder="Enter address">
                    </div>
                    <div class="form-group details-div">
                         <h4 class="heading"><label for="City">City:</label></h4>
                          <input type="text" class="form-control" name="city" id="city" placeholder="Enter city">
                    </div>
                    <div class="form-group details-div">
                          <h4 class="heading"><label for="pincode">Pincode:</label></h4>
                          <input type="pincode" class="form-control" name="pincode" id="pincode" placeholder="Enter pincode">
                    </div>
                    <div class="form-group details-div">
                      <h4 class="heading"><label for="mobile">Email:</label></h4>
                      <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
                    </div>
                  <h4 class="heading"><label for="radio">Gender</label><br /></h4>
                  <label for="radio" class="heading">Male</label>
                  <input type="radio" name="gender" id="gender" value="male">
                  <label for="radio" class="heading">Female</label>
                  <input type="radio" name="gender" id="gender" value="female">
                    <div class="form-group details-div">
                      <h4 class="heading"><label for="">Mobile:</label></h4>
                      <input type="mobile" class="form-control" name="mobile" id="mobile" placeholder="Enter mobile">
                    </div>
                <div class="form-group details-div">
                      <h4 class="heading"><label for="email">Password:</label></h4>
                      <input type="password" class="form-control" name="password" id="password" placeholder="Enter password" onkeyup="validate()"><br />
                     <h4 class="heading">Strength:<span id="ss">no strength</span></h4>
                     <h4 class="heading"><input type="checkbox" onclick="myFunction()">Show Password
                        </h4>
                </div>
                  <h4 class="heading">**Name of the area is mendentory  to fill</h4>
                <button type="submit" class="btn btn-primary" name="submit" id="submit">Submit</button>
                <button type="reset" class="btn btn-danger" name="reset" id="reset">Reset</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</section>
 <script type="text/javascript">
    
        function validation(){
                 var a=document.getElementById('name').value;
                 var b=document.getElementById('address').value;
                 var c=document.getElementById('city').value;
                 var d=document.getElementById('pincode').value;
                 var e=document.getElementById('email').value;
                 var f=document.getElementById('mobile').value;
                 var g=document.getElementById('password').value;
            if(a==""){
                alert("***please fill the customer name");
                return false;
            }
           
            if(b==""){
                alert("***please fill the address");
                return false;
            }
            if(c==""){
                alert("***please fill the city");
                return false;
            }
            if(d==""){
                alert("***please fill the pincode");
                return false;
            }
            if(isNaN(d)){
                alert("***please fill the only numeric pincode");
                return false;
            }
            if(e==""){
                alert("***please fill the email");
                return false;
            }
            if(e.indexOf('@')<=0){
                alert("invalid @ position");
                return false;
            }
            if(e.charAt(a.length-4)!='.'){
                alert("invalid . position");
                return false;
            }
            if(f==""){
                alert("***please fill the mobile");
                return false;
            }
            if(isNaN(f)){
                alert("***please fill only numeric mobile number");
            }
            if(f.length<10){
                alert("***mobile number must be 10 digit");
            }
            if(f.length>10){
                alert("***mobile number must be 10 digit");
            }
            
            if(g==""){
                alert("***please fill the password");
                return false;
            }
            if(g.length<5){
                alert("***password must be 8 character");
                return false;
            }
            if(g.length>8){
                alert("***password must be 8 character");
                return false;
            }
        }
    </script>
   
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/wow.min.js"></script>
    </body>
</html>