<html>
    
     <meta charset="utf-8">
    <title></title>
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
           
            .heading{
                float: right;
                font-family: ALEGERIAN;
                color: navy;
                margin-top: 80px;
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
         
             #adminlogo{
            background: white;
            border-radius: 50px;
            width: 90px;
            height: 70px;
            margin-top: 10px;
        }
             .ha{
            font-family: ALGERIAN;
            margin:5px;
        }
            .dashboard{
      font-family:Monotype corsiva;
      text-align: center;
      font-size: 60px;
                background-color: navy;
                color: white;
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
            
            .section{
                margin-top: 50px;
                font-family:Monotype corsiva;
      text-align: center;
      font-size: 60px;
                text-align: center;
            } 
                
         </style>
    </head>
<body class="gray">
    
    
          
      <div class="con">
        <form action="pincodematch.php" method="POST">
                 <h2 class="section"> Display tailors details</h2>
         
 
<div class="grid_10">
    <div class="box round first">
        
        <table class="table table-striped table-bordered table-hover table-condensed">
        

        <div class="block">
<?php
            
           echo "<table border='1' table-responsive>";
            echo "<tr>";
            echo "<td style='font-weight:bold'>"; echo "tcode"; echo "</td>";
            echo "<td style='font-weight:bold'>"; echo "contact_person"; echo "</td>";
            echo "<td style='font-weight:bold'>"; echo "address"; echo "</td>";
            echo "<td style='font-weight:bold'>"; echo "city"; echo "</td>";
    
    
            echo "<td style='font-weight:bold'>"; echo "view details"; echo "</td>";
            echo "</tr>";
            ?>
<?php
session_start();
$userid=$_SESSION['email'];
$pincode=$_SESSION['pincode'];
$con=mysqli_connect("localhost","root","","tailor");
$query="select * from Tailorregistration where pincode='$pincode'"; 
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_array($result))
{
               
                echo "<tr>";
                echo "<td>"; echo $row["tcode"]; echo "</td>";
                echo "<td>"; echo $row["contact_person"]; echo "</td>";
                echo "<td>"; echo $row["address"]; echo "</td>";
                echo "<td>"; echo $row["city"]; echo "</td>";
                echo "<td>"; ?> <a href="display_order_1.php"?tcode=<?php echo $row["tcode"]; ?>">View Details</a> <?php echo "</td>";
                echo "</tr>";
            }
            echo "</table>";

            ?>

                                   
                                                                         
                                   </div>

    </div>
             </div>
            </div>
        </form>
    

               
    
    </div>
    
    </body>
</html>