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
    background-color:#23415c;
    border: none;
     
    
}
.navbar-nav.nav li a{
    color: #fff;
    font-size: 20px;}
        
.dropdown:hover>.dropdown-menu{
    display: block;
    color: black;
}
      .section-heading{
			background-color:#23415c;
			color:white;
			padding:3px;
			box-shadow:0 0 10px gray;
            text-align: center;
          margin-top: 180px;
		}
      .navbar-brand{
          float:left;
          min-height: 45px;
          padding: 0 15px 5px;
      }
      .navbar-inverse .navbar-nav .active a , .navbar-inverse .navbar-nav .active a:focus,.navbar-inverse .navbar-nav .active a:hover{
          color: #FFF;
          background-color: #23415c;
          
      }
       .navbar-inverse li a:hover>.navbar-nav li a{
          color: #D5D5D5;
      }
       #header li a:hover,#header li a:active{
          color: orange;
      }
        #header .dropdown .dropdown-menu li a{
          color: black;
      }
      .navbar-default .navbar-nav li a{
          color: #D5D5D5;
      }

      .btn{
          color:black;
          background: cyan;
      }
      .table{
          margin-top: 20px;
      }
      </style>
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
        <h2 class="section-heading">Size Chart for Women's Shirt</h2>
        <table class="table table-striped table-bordered table-hover  table-condensed">
            <thead class="thead-dark">
                <tr>
                    <th style="font-size:20px;">Size</th>
                    <th style="font-size:20px;">S</th>
                    <th style="font-size:20px;">M</th>
                    <th style="font-size:20px;">L</th>
                    <th style="font-size:20px;">XS</th>
                    <th style="font-size:20px;">XL</th>
                    <th style="font-size:20px;">XXL</th>
                 </tr>
                </thead>
            <tbody>
                <tr>
                     <td>Chest(in inches)</td>
                    <td>33-34</td>
                    <td>35-36</td>
                        <td>37-38</td>
                        <td>32-33</td>
                        <td>39-40</td>
                        <td>41-42</td>
                </tr>
                 <tr>
                     <td>West(in inches)</td>
                    <td>28-29</td>
                    <td>30-31</td>
                        <td>32-33</td>
                        <td>26-27</td>
                        <td>34-35</td>
                        <td>36-37</td>
                </tr>
                 <tr>
                     <td>Hip(in inches)</td>
                    <td>39-40</td>
                    <td>41-42</td>
                        <td>43-44</td>
                        <td>37-38</td>
                        <td>45-46</td>
                        <td>47-48</td>
                </tr>


            </tbody> 
            </table>
            </div>
        </div>
        </div>
    </div>
    </div>
    </body>
    </html>