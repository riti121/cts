<!DOCTYPE html>
<html lang="en">
<head>
  <title>details form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
       .jain-container .navbar-default{
    position: absolute;
    top: 0;
    background:#23415c;
    border: none;
    
    
}
.navbar-nav.nav li a{
    color: #fff;
    font-size: 20px;
    font-family: 'Noto Serif', serif;
} 
.dropdown:hover>.dropdown-menu{
    display: block;
    color: black;
    background-color: black
}
       #header li a:hover,#header li a:active{
          color: orange;
      }
     .dropdown .dropdown-menu li a{
          color: #FFF;
         background-color: black;
      }
      .navbar-default .navbar-nav li a{
          color: #D5D5D5;
      } 
  
      .section-heading{
			background-color:#23415c;
			color:white;
			padding:3px;
			box-shadow:0 0 10px gray;
            text-align: center;
          margin-top: 150px;
		}
       .btn{
          color:black;
          background: cyan;
      }
   
      </style>
    <script>
        function getConfirmation(ccode){''
            var r=confirm("Want to verify the status of pending customer ? "+ccode);
            if(r==true)
            {
                $.post("verify1.php",{ccode:ccode},function(res,status)
                       {
                            
                             if(res=="done")
                                {
                                    location.href="pendingcus.php";
                                }
                                else
                                {
                                    alert("OOPs! Something is wrong... Contact Admin")
                                }  
                          
                        }
                      );
                            
            }
        }
    </script>

    </head>
<body bg color="gray">
 <div class="jain-container">
            <!---Create navbar------>
        <nav class="nav navbar-default navbar-fixed-top">
            <div class="container-fluid header-border" style="padding-left: 0; padding-right: 0;">
               <div class="container" style=" margin-top: 2em; padding-left: 0; padding-right: 0;">
                   <div class="col-md-3">
                <a href="Tailorfront.php"><img  class="img-thumbnail" src="images/headimg.png" style="width: 65px;"></a>
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
                        <ul class="nav navbar-nav" id="header" style="float:right" >
                                     <li ><a href="Tailorfront.php">Home</a></li>
                                     <li><a href="col.php">Collection</a></li>
                                     <li><a href="aboutus.php">About Us</a></li>
                                     <li><a href="contactus.php">Contact Us</a></li>
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
                </div>
            </div>
        </nav>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
        <div class="table-responsive">
        <h2 class="section-heading">Measurement Details</h2>
        <table class="table table-striped table-bordered table-hover table-condensed">
                <tr class="text-center">
                    <th>Waist</th>
                    <th>Bust</th>
                    <th>Shoulder</th>
                     <th>Sleevelength</th>
                    <th>Armhole</th>
                    <th>Around Arm</th>
                    <th>Front Neck</th>
                    <th>Back Neck</th>
                    <th>Length</th>
                    <th>cside</th>
                    
                    <th>Kurti Style</th>
                    <th>Instruction</th>
                </tr>
<?php
            $cn=mysqli_connect("localhost","root","","tailor");
            $sql="Select * from kurti";
            $result=mysqli_query($cn,$sql);
            while($r=mysqli_fetch_array($result))
            {
?>
                <tr>
                    <td><?php echo $r['waist']; ?></td>
                    <td><?php echo $r['bust']; ?></td>
                    <td><?php echo $r['shoulder']; ?></td>
                    <td><?php echo $r['sleevelength'];?></td>
                    <td><?php echo $r['armhole'];?></td>
                     <td><?php echo $r['aarm'];?></td>
                    <td><?php echo $r['fneck'];?></td>
                    <td><?php echo $r['bneck'];?></td>
                        <td><?php echo $r['length'];?></td>
                        <td><?php echo $r['cside'];?></td>
                          <td><?php echo $r['ksstyle'];?></td>
                        <td><?php echo $r['instruction'];?></td>
                          </tr>
<?php
            }
?>
        </table>
    </div>
    </div>
    </div>
     </div>
    </div>
    </body>
    </html>