<?php
session_start();
$message="";
$success="";
if($_POST['submit']){
$email=$_POST['email'];   
$newpassword=$_POST['newpassword'];
$confirmpassword=$_POST['confirmpassword'];
$con=mysqli_connect("localhost","root","","tailor");
$result=mysqli_query($con,"SELECT password from Customerregistration WHERE email='$email'");
    if(!$result){
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
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
      
       body{
          background-image: url("images/chpassword.jpg");  
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
     .form-div{
			background-color:rgba(0,0,0, 0.5);
			padding:5px 10px 5px 10px;
			box-shadow:0 0 10px gray;
        margin-top: 140px;
        
		}    
      
       .heading{
          color: #FFF;
          font-size: 20px;
          
      }
      .msg{
          font-size: 25px;
          color: red;
      }
	
  </style>
     </head>
<body bg color="gray">
<div class="container" >
<div class="row">
<div class="col-md-offset-2 col-md-8">
<form  action="forgetpassword.php" method="POST">
		<div class="form-div">
            <div class="section-heading"><h2 style="text-align:center">Forget Password</h2></div>
<div class="form-group details-div">
      <h4 class="heading"><label for="email">Email:</label></h4>
      <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
    </div>
	
	<div class="form-group details-div">
      <h4 class="heading"><label for=" new password">New Password:</label></h4>
      <input type="new password" class="form-control" name="newpassword" id="newpassword" placeholder="Enter name" name=" new password">
    </div>
	<div class="form-group details-div">
      <h4 class="heading"><label for="confirm password">Confirm Password:</label></h4>
      <input type="confirm password" class="form-control" name="confirmpassword" id="confirmpassword" placeholder="Enter confirm password">
    </div>
	
   <div  class="msg"><?php echo $message; ?></div>
              <div  class="msg"><?php echo $success; ?></div>
	
	<button type="submit" class="btn btn-primary"  value="submit" id="submit" name="submit">Submit</button>
	<button type="reset" class="btn btn-danger" value="reset" id="reset" name="reset">Reset</button>
    </div>
	</form>
    </div>
    </div>
        </div>
    
 	</body>
	</html>