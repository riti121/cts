
<html>
 <head>
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
    .select{
        width: 250px;
        height: 20px;
        font-size: 27px;
        
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
                <form name="myForm" action="addproduct.php" method="POST" enctype="multipart/form-data" >
		      <div class="form-div">
                <div class="section-heading"><h2 style>Add Product</h2></div>
                    <div class="form-group details-div">
                      <h4 class="heading"><label for="tailor name">Product Name:</label></h4>
                      <input type="name" class="form-control"  name="pname" id="pname" >
                    </div>
                    <div class="form-groups details-div">
                        <h4 class="heading"><label for="class"> Product Price:</label></h4>
                        <input type="text" class="form-control" name="pprice" id="pprice">
                    </div>
                    <div class="form-group details-div">
                         <h4 class="heading"><label for="City">Product Quantity:</label></h4>
                          <input type="text" class="form-control" name="pqty" id="pqty">
                    </div>
                   <div class="form-group details-div">
                       <h4 class="heading" >    <label for="profile" class="img">Product Image</label></h4>
                      <input type="file" name="pimage" /></div>
                  <div class="form-group details-div">
                         <h4 class="heading"><label for="category">Product Category:</label></h4>
                          <select name="" class="select">
                              <option>gvhvhb</option>
                              <option>bjfkjhd</option>
                              <option>hgrjkeihij</option>
                      </select>
                    </div>
                  <div class="form-group details-div">
                         <h4 class="heading"><label for="City">Status:</label></h4>
                          <input type="text" class="form-control" name="status" id="status">
                    </div>
                   <div class="form-group details-div">
                         <h4 class="heading"><label for="City">Product Description:</label></h4>
                       <textarea cols="15" rows="10" class="form-control" name="pdse" id="pdse"></textarea>
                    </div>
  <button type="submit1" class="btn btn-primary" name="submit1"  value="upload">Upload</button>
                <button type="reset" class="btn btn-danger" name="reset" id="reset">Reset</button>
                </div>
                </form>
<?php 
 if(isset($_POST["submit1"]))
 {
     $v1=rand(1111,9999);
     $v2=rand(1111,9999);
     $v3=$v1.$v2;
     $v3=md5($v3);
     $fnm=$_FILES["pimage"]["name"];
     $dst="./product_image/".$v3.$fnm;
     $dst1="product_image/".$v3.$fnm;
     move_uploaded_file($_FILES["pimage"]["tmp_name"],$dst1);
     $con=mysqli_connect('localhost','root','','tailor');

    $query="INSERT INTO product VALUES('','$_POST[pname]',$_POST[pprice],$_POST[pqty],'$dst1','$_POST[pcategory]','$_POST[pdse]','$_POST[status]')";
    mysqli_query($con,$query);
    mysqli_close($con);

 }
?>
            </div>
        </div>
    </div>
</section>
   
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/wow.min.js"></script>
    </body>
</html>