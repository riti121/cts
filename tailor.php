<html>
    
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

    <head>
        <style>
            
            .con{
                margin-top: 80px;
                
            }
             .form-div{
    background-color:rgba(0,0,0,0.1);
    padding:5px 10px 5px 10px;
    box-shadow:0 0 10px gray;
    margin-bottom: 20px;
    margin-top: 20px;
    
		      }  
            .heading{
                float: right;
                font-family: ALEGERIAN;
                color: navy;
            }
                
            .head{
                float: right;
                font-size:20px;
                color: black;
            }
            
            .h1{
                color: #23415c;
                font-size: 50px;
                font-family: ALEGERIAN;
                text-align: center;
            }
            .con{
                margin-top: 120px;
            }
         </style>
    </head>
<body class="gray">
     <h1 class="h1">Welcome to Customer Dash Board</h1>
    <div class="con">
        <form action="CustomerRegistrationform.php" method="POST">
         <div class="form-div"> 
             <div class="head">
                 <h1 class="heading">Select Your Measurement Type</h1><br />
               <a href="" class="head">By Filling Measurement form </a><br />
                 <a href="" class="head">Call the tailor for taking Measurement at home</a>
    
             </div> 
 <div class="con">         
 <?php
session_start();
$userid=$_SESSION['email'];
$pincode=$_SESSION['pincode'];
$con=mysqli_connect("localhost","root","","tailor");
$query="select * from Tailorregistration where pincode='$pincode'"; 
$result=mysqli_query($con,$query);
while($r=mysqli_fetch_array($result))
{
    echo '<label for="radio">Select tailor &nbsp</label>';
    echo '<label for="radio" class="heading2">yes</label>';
    echo '<input type="radio" name="radio" >';
    echo '<label for="radio" class="heading2">No</label>';
    echo '<input type="radio" name="radio" ><br />';
    echo " Tailor Code:- $r[tcode]<br />  Organization Name:- $r[orgname]<br /> Address:- $r[address]<br /> Mobile Number:- $r[mobile] <br /> Email:- $r[email] <br />Profile:-$r[profile];
    <br />";
    
   
}             
?>
             </div>
                       </div>
             </form> 
    
        </div>
    
    </body>
</html>