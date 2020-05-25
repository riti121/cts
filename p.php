<?php
session_start();
$userid=$_SESSION['email'];
$cn=mysqli_connect("localhost","root","","tailor");
$sql="Select ccode from customerregistration where email='$userid'&& send='N'"; $result=mysqli_query($cn,$sql);
$row=mysqli_fetch_array($result);
              {
    
?>
              
                <?php echo $row['ccode']; ?>
       <?php      

            }
     ?>



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
          
      }
            #divResult{
                font-size: 30px;
                color: red;
            }
         </style>
        

    </head>
     
<body >
    
   
      <div class="container">
        <div class="row">
            <div class="col-xs-12">
        <div class="table-responsive">
        <h2 class="section-heading">Tailors Details</h2>
        <table class="table table-striped table-bordered table-hover table-condensed">
                <tr class="text-center">
                    <th>tcode</th>
                    <th>Organization name</th>
                    <th>Contact_person</th>
                    <th>Address</th>
                     <th>City</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Pincode</th>
                  <th>yes</th>
              
                    
                    
                </tr>
<?php
session_start();
$userid=$_SESSION['email'];
$pincode=$_SESSION['pincode'];

            $cn=mysqli_connect("localhost","root","","tailor");
            $sql="Select * from Tailorregistration where pincode='$pincode'"; 
            $result=mysqli_query($cn,$sql);
            while($r=mysqli_fetch_array($result))
            {
?>
                <tr>
                    <td><?php echo $r['tcode']; ?></td>
                     <td><?php echo $r['orgname']; ?></td>
                    <td><?php echo $r['contact_person']; ?></td>
                    <td><?php echo $r['address']; ?></td>
                      <td><?php echo $r['city'];?></td>
                     <td><?php echo $r['email']; ?></td>
                    <td><?php echo $r['mobile']; ?></td>
                    <td><?php echo $r['pincode']; ?></td>
                    <td> <a href="?ccode=<?php echo $r['ccode'];?>">submit</a></td>
                
<?php
            }
?>


        </table>
            

    </div>
    </div>
    </div>
     </div>
    </body>
</html>