<?php
$link=mysqli_connect("localhost","root","","tailor");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title></title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    <style>
         /*for footer */
    .footer-main-div .container{
        width: 100%;
        height: auto;
        margin: auto;
        background: #272727;
        padding: 20px 0px; 
        position: absolute;
    }
    
    .footer-main-div .container .btn-default{
        margin-left: 90%;
        background:rgba(0,0,0,0.1%);
    }
    .footer-main-div .container .btn-default a{
        text-decoration: none;
        color:#fff; 
    }
    .footer-social-icons .container{
        width: 100%;
        height: auto;
        margin: auto;
    }
    
    .footer-social-icons ul{
        margin: 0;
        padding: 0;
        text-align: center;
    }
    .footer-social-icons ul li{
        display: inline-block;
        width: 50px;
        height: 50px;
        margin: 0 10px;
        border-radius: 100%;
        background: #fff;
    }
    .footer-social-icons ul li a{
        background:#fff;
        font-size: 25px;
        border: 3px solid #fff;
        overflow: hidden;
    }
    .footer-social-icons ul li a i{
        line-height: 200%
    }
    .footer-social-icons ul li a .fa{
        position: relative;
        color: #262626;
        transition: .9s;
        color: #272727;
    }
    .footer-social-icons ul li a:hover .fa{
        transform: rotateY(360deg);
        
    }
        .cards{
        margin-left: 22px;
    }
    .cards h3{
        color: #fff;
    }
    .cards h4 a{
        color: #fff;
        font-size: 20px;
        }
   
    </style>
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6 ">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href=""><i class="fa fa-phone"></i> +999 069 0148</a></li>
								<li><a href=""><i class="fa fa-envelope"></i> cts@gmail.com</a></li>
							</ul>
						</div>
					</div>
					</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-md-1">
						
							
				
							<a href="Tailorfront.php"><img src="images/headimg.png" alt="" width="60px" height="60px" /></a>
						
						
							
					</div>
					<div class="col-md-11">
						
                            <marquee><h1 class="head">Customized tailoring System</h1></marquee>
						
					</div>
                
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="Tailorfront.php">Home</a></li>
								<li class="dropdown"><a href="#" class="active">Login<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="CustomerLogin.php" class="active">Customer Login</a></li>
										<li><a href="TailorLogin.php">Tailor Login</a></li> 
										<li><a href="AdminLogin.php">Admin Login</a></li> 
								 
                                    </ul>
                                </li> 
								<li class="dropdown"><a href="#">Registration<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="CustomerRegistrationform.php">Customer registration</a></li>
										<li><a href="Tailorregistrationform.php">Tailor registration</a></li>
                                    </ul>
                                </li> 
								<li><a href="index.php">Collection</a></li>
                          <li><a href="aboutus.php">About Us</a>
								<li><a href="contactus.php">Contact Us</a></li>
							</ul>
						</div>
					</div>
					
					
				</div>
				</div>
			</div>
	</header>
	
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Category</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#mens">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Mens
										</a>
									</h4>
								</div>
								<div id="mens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="mshirts.php">Shirts</a></li>
											<li><a href="mkurta.php">Kurta</a></li>
											<li><a href="trauserm.php">Trausers</a></li>
											
											
										</ul>
									</div>
								</div>
							</div>
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#womens">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Womens
										</a>
									</h4>
								</div>
								<div id="womens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="shopkurti.php"> Cotton Kurti </a></li>
                                            <li><a href="netkurti.php"> Net Kurti </a></li>
                                            <li><a href="silkkurti.php"> Silk Kurti </a></li>
											<li><a href="salwar.php">Salwar</a></li>
											<li><a href="gshirts.php">shirts</a></li>
											<li><a href="trauserw.php">Trausers</a></li>
											<li><a href="suit.php">Suits</a></li>
										</ul>
									</div>
								</div>
							</div>
                         
						</div><!--/category-productsr-->
					
						<div class="brands_products"><!--brands_products-->
							<h2>Brands</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<li><a href=""> <span class="pull-right">(50)</span>Acne</a></li>
									<li><a href=""> <span class="pull-right">(56)</span>Grüne Erde</a></li>
									<li><a href=""> <span class="pull-right">(27)</span>Albiro</a></li>
									<li><a href=""> <span class="pull-right">(32)</span>Ronhill</a></li>
									<li><a href=""> <span class="pull-right">(5)</span>Oddmolly</a></li>
									<li><a href=""> <span class="pull-right">(9)</span>Boudestijn</a></li>
									<li><a href=""> <span class="pull-right">(4)</span>Rösch creative culture</a></li>
								</ul>
							</div>
						</div><!--/brands_products-->
						
												<div class="shipping text-center"><!--shipping-->
							<img src="images/shipping1.jpg" alt=""  width="200" height="300"/>
						</div><!--/shipping-->
						
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Features Items</h2>
                        <?php
                        $id=$_GET['id'];
                        $result=mysqli_query($link,"select * from product where status='mk'");
                        while($row=mysqli_fetch_array($result))
                        {
                        ?>
                    <div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
                                    <a href="productdetails.php?id=<?php echo $row['id'];?>"><img src="<?php echo $row["pimage"];?>" alt="" width="220" height="288"/></a>
                                        
										<h2>Rs.<?php echo $row["pprice"];?></h2>
										<p><?php echo $row["pname"];?></p>
										
                                       
									</div>
									
								</div>
                                <div class="choose">
									<ul class="nav nav-pills nav-justified">
										
										
										<li><a href="mkurtaf.php"><i class="fa fa-plus-square"></i>Select Fabric</a></li>
									</ul>
								</div>
                        </div>
                    
                        
                        </div>
                        
                                    
                        <?php
                            
                        }
                        ?>
                    
                        <ul class="pagination">
							<li class="active"><a href="">1</a></li>
							<li><a href="">2</a></li>
							<li><a href="">3</a></li>
							<li><a href="">&raquo;</a></li>
			
                        </ul>
                                 
							</div><!--features_items-->
				
				</div>
                </div>
            </div>

    </section>
  <!---- Start Footer ------>
        <div class="footer-main-div">
            <div class="container">
                
            <div class="footer-social-icons">
                <ul>
                    <li><a href="#" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                </ul>
            </div><hr>  
                <div class="col-md-2 cards" >
                  <h3>GET TO KNOW US</h3><br>
                    <h4><a href="contactus.php">Contact Us</a></h4>
                    <h4><a href="aboutus.php">About Us</a></h4>
                    <h4 ><a href="#">CTS Stories</a></h4>
                </div>
                <div class="col-md-2 cards">
                  <h3>HELP</h3><br><br>
                    <h4><a href="#">Payment</a></h4>
                    <h4><a href="#">Shipping</a></h4>
                        <h4><a href="#">Cancalition & Return</a></h4>
                </div>
                <div class="col-md-2 cards">
                  <h3>POLICY</h3><br><br>
                    <h4><a href="#">Return Policy</a></h4>
                    <h4><a href="#">Security</a></h4>
                    <h4><a href="#">Privacy</a></h4>
                </div>
                <div class="col-md-2 cards">
                  <h3>LET US HELP YOU</h3><br>
                    <h4><a href="#">Your Account</a></h4>
                    <h4><a href="#">Return Center</a></h4>
                    <h4><a href="#">Help</a></h4>
                </div>
                <div class="col-md-3 cards">
                    <h3>REGISTERED OFFICE ADDRESS</h3><br>
                 </div>
                </div>
        </div>    
        <!----End footer----->
        
    
    <script src="js/jquery.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>