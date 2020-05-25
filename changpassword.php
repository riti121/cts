<?php
session_start();
$message="";
$success="";
if($_POST['submit']){
$email=$_POST['email'];   
$oldpassword=$_POST['oldpassword'];
$newpassword=$_POST['newpassword'];
$confirmpassword=$_POST['confirmpassword']; $con=mysqli_connect("localhost","root","","tailor");
$result=mysqli_query($con,"SELECT Password from Customerregistration WHERE email='$email'");
    if(!$result &&    
$oldpassword!=mysql_result($result,0)){
        echo "the username you entered does not exist ";
    }
        
  if($newpassword==$confirmpassword)
        $sql=mysqli_query($con,"UPDATE Customerregistration SET password='$newpassword' WHERE email='$email'");
if($sql){
        $success="***Your passowrd has ben changed succeessfully*** ";
    }
    else{
     $message="***New password and confirm password don't match***";
    }
}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
  <title>admin form</title>
    
    <link href="images/titlelogo.ico" rel="icon" type="image/ioc">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
      body{
    background-image: url("images/changpassword.jpg");
    background-size: cover;
    background-attachment: fixed;
    background-repeat: no-repeat;
}
        .section-heading{
			background-color:#23415c;
			color:white;
			padding:3px;
			box-shadow:0 0 10px gray;
		}
      .navbar{
          margin-bottom: 0;
          border-radius:0;
          background-color:transparent;
          color: #FFF;
          padding: 1% 0;
          font-size: 18px;
          border: 0;   
      }
      .navbar-inverse .navbar-nav .active a , .navbar-inverse .navbar-nav .active a:focus,.navbar-inverse .navbar-nav .active a:hover{
          color: #FFF;
          background-color:transparent; 
          
      }
       .navbar-inverse li a:hover>.navbar-nav li a{
          color: #D5D5D5;
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
      }


	.form-div{
    background-color:rgba(0,0,0,0.4);
    padding:5px 10px 5px 10px;
    box-shadow:0 0 10px gray;
        margin-top: 80px;
        color: #fff;
		      }  
      .fa{
          padding:20px;
          font-size: 30px;
          color: #FFF;
      }
      .heading{
          color: #fff;
      }
      .msg{
          font-size:25px;
color: red;          
      }
  </style>
    <script>
        function checkpassword()
        {
            var p=f.pass.value;
            var cp=f.cpass.value;
            if(p!=cp){
            alert("new password and confirm password are  not similar");
            } 
        }
    </script>
</head>
 <body>
<section>
<div class="container" >
<div class="row">
<div class="col-md-offset-2 col-md-8">
<form  action="changpassword.php" Method="POST" onsubmit="return validation()">
		<div class="form-div">
  <div class="section-heading"><h2 style="text-align:center">Change Password</h2></div>
  <div class="form-group details-div">
      <h4><label for="userid">Userid:</label></h4>
      <input type="userid" class="form-control" name="email" id="email" placeholder="Enter email id ">
    </div>

    <div class="form-group details-div">
      <h4><label for="old password">Old Password :</label></h4>
      <input type="password" class="form-control" name="oldpassword" id="oldpassword" placeholder="Enter name" name="old password">
    </div>
	<div class="form-group details-div">
      <h4><label for=" new password">New Password :</label></h4>
      <input type="password" class="form-control" name="newpassword" id="newpassword" placeholder="Enter new password">
    </div>
	<div class="form-group details-div">
      <h4><label for="retype password">Confirm Password :</label></h4>
      <input type="password" class="form-control" name="confirmpassword" id="confirmpassword" placeholder="Enter conform password">
    </div>
            <div  class="msg"><?php echo $message; ?></div>
              <div  class="msg"><?php echo $success; ?></div>
	<br />
	<button type="submit" class="btn btn-primary" value="submit" name="submit" id="submit" >SUBMIT</button>
	</div>
    </form>
</div>
</div>
    </div>
    </section>
<script type="text/javascript">
    
        function validation(){
                 var a=document.getElementById('oldpassword').value;
                 var b=document.getElementById('newpassword').value;
                 var c=document.getElementById('confirmpassword').value;
                if(a==""){
                alert("***please fill the oldpassword");
                return false;
            }
           
            if(b==""){
                alert("***please fill the new password");
                return false;
            }
            if(c==""){
                alert("***please fill the confirmpassword");
                return false;
            }
     </script>
    </body>
</html>