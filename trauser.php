<?php
$message="";
if(isset($_POST['submit']))
{
     $length=$_POST['length'];
     $waist=$_POST['waist'];
     $inseam=$_POST['inseam'];
     $outseam=$_POST['outseam'];
     $legopening=$_POST['legopening'];
     $hip=$_POST['hip'];
     $thigh=$_POST['thigh'];
     $frise=$_POST['frise'];
     $brise=$_POST['brise'];
     $instruction=$_POST['instruction'];
    $con=mysqli_connect('localhost','root','','tailor');
    $res="INSERT INTO trauser(length,waist,inseam,outseam,legopening,hip,thigh,frise,brise,instruction)values('$length','$waist','$inseam','$outseam','$legopening','$hip','$thigh','$frise','$brise','$instruction')";
    $ins=mysqli_query($con,$res);
    mysqli_close($con);
     }
 $message="***Your data has been saved.***";
    
?>


<html>
<head>
<title></title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
button
{
margin-top:25px;
margin-left:15px;

}
h1
{
text-align:center;
margin-right:100px;
text-decoration:none;
color:white;
font-family:ALEGERIAN;
font-size:40px;
background-color:#23415c;
 
}
.container
{
background-color:#080808e0;
background:cover;
margin-right:100px;
margin-top:50px;
border-style:inset;

}
body{
background-image:url('images/AdminLogin.jpg');
    background-attachment: fixed;
    background-size: cover;
    background-repeat: no-repeat;
}
form{
margin-left:100px;

}
.a
{
text-decoration:none;
color:white;
    font-size: 25px;

    }
    .btn-primary{
        float: left;
        margin-left: 40px;
        margin-top:30px;
    }
</style>
</head>
<body>


<div class="container">
<form  class="form-horizonttal" action="trauser.php" method="post" >
<h1 class="heading">MEASUREMENT FORM FOR TRAUSER</h1>
<div class="form-group col-lg-5">
<label  class="a"for="name">Length:</label>
         <input type="length" class="form-control" name="length" id="length" placeholder="Enter length of kurti in inches">

</div>
    <div class="form-group col-lg-5">
<label  class="a"for="name">Waist:</label>
     <input type="waist" class="form-control" name="waist" id="waist" placeholder="Enter waist size in inches">

</div>
     <div class="form-group col-lg-5">
<label  class="a"for="name">Inseam:</label>
     <input type="waist" class="form-control" name="inseam" id="inseam" placeholder="Enter inseam size in inches">

</div>
 <div class="form-group col-lg-5">
<label  class="a"for="name">Outseam:</label>
     <input type="waist" class="form-control" name="outseam" id="outseam" placeholder="Enter outseam size in inches">
</div>
<div class="form-group col-lg-5">
<label  class="a"for="name">Leg Opening:</label>
     <input type="waist" class="form-control" name="legopening" id="legopening" placeholder="Enter legopening size in inches">
</div>

 <div class="form-group col-lg-5">
<label class="a"for="name">Hip:</label>
     <input type="neck" class="form-control" name="hip" id="hip" placeholder="Enter  htp size  in inches">

</div>
   <div class="form-group col-lg-5">
<label class="a"for="name">Thigh:</label>
     <input type="neck" class="form-control" name="thigh" id="thigh" placeholder="Enter thigh length  in inches">

</div>
  <div class="form-group col-lg-5">
<label class="a"for="name">Front Rise:</label>
     <input type="neck" class="form-control" name="frise" id="frise" placeholder="Enter front rise length  in inches">

</div>
    
  <div class="form-group col-lg-5">
<label class="a"for="name">Back Rise:</label>
     <input type="neck" class="form-control" name="brise" id="brise" placeholder="Enter back rise length  in inches">

</div>
  <div class="form-group col-lg-5">
<label  class="a"for="name">Instructions(if any)</label><br />
        <textarea id="txtArea" rows="8" cols="60" name="instruction" ></textarea>
    </div>
    
<button type = "submit" class = "col-xs-2 input-lg" id="submit" value="submit" name="submit">Submit</button>
    <a href="helpforsg.php" class="btn btn-primary" role="button" id="help" name="help" value="help">Help</a><br />    
    <a href="helpforsg.php" class="btn btn-primary" role="button" id="video" name="video" value="help">Help By Video</a><br />    
 
</form>
</div>
</body>
</html>