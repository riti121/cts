
<html>
<head>
<title>Admin section</title>
    
        <link href="images/titlelogo.ico" rel="icon" type="image/ioc">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        
        body{
            margin: 0px;
            border: 0px;
            background-color: beige;
        }
        #header{
            width:100%;
            height: 170px;
            background-color:#23415c;
            color: white;
        }
            
            #adminlogo{
            background: white;
            border-radius: 50px;
            width: 100px;
            height: 70px;
            margin-top: 10px;
            margin-left: 100px;
                position: relative;
        }
        .log{
            float:right;
            margin-top: 100px;
            margin-right: 70px;
        
        }
        
        .ha{
            font-family: ALGERIAN;
    font-size: 40px;
            position: relative;
           
            margin-top: 15px;
        }
        .heading{
            font-family:Monotype corsiva;
            text-align: center;
            position: relative;
            
        }
        .img{
            height:150px;
            width: 170px;
            margin-top:50px;
            margin-left:100px;
            margin-right:40px;
        }
        .img1{
            height:140px;
            width:150px;
            margin-top:50px;
            margin-left: 100px;
        
        }
        .h{
            margin-left: 60px;
        }
        .btn-primary{
            margin-left: 60px;
        }
        
        .hh{
            margin-left: 60px;
        }
         /*for footer */
    .footer-main-div{
        width: 100%;
        height: auto;
        margin: auto;
        background: #272727;
        padding: 20px 0px; 
        position: absolute;
    }
    .footer-social-icons{
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
        .logout{
            float: right;
            font-size: 30px;
            color: white;
            margin-top: 50px;
        
        
        }
      a:hover {
  color:white;
  background-color:orange;
}
    </style>
</head>                                                         
   <body bg color="aliceblue">
       <div id="header">
           <div class="row">
               <div class="col-md-2">
                   <img src="imgadmin/imgad.jpg" alt="adminlogo" id="adminlogo"></div>
               <div class="col-md-2">
                   <h1 class="ha">ADMIN SECTION</h1>
               </div>
       
           <div class="col-sm-8">
               <a href="AdminLogin.php" class="logout">Logout</a>
           </div>
       </div>
       
       </div>
       <h1 class="heading">Welcome to the Admin Section...</h1>
       <div class="container">
       <div class="row">
       <div class="col-sm-4">
           <div class="circle">
           <img src="imgadmin/changpassword.jpg" class="img img-thumbnail img-responsive" >
           </div>
           <div class="caption">
         <h3 class="h">Change Password From here...</h3>
          <p>
          <a href="changpassword.php" class="btn btn-primary" role="button">
          Change Password
          </a>
         </p>
         </div>
      </div>    
       <div class="col-sm-4">
           <div class="circle">
       <img src="imgadmin/pending%20cunstomer.png" class="img img-thumbnail img-responsive">
       </div>
           <div class="caption">
               <h3 class="h">See the Details of pending customer from here...</h3>
               <p>
                   <a href="pendingcus.php" class="btn btn-primary" role="button">Pending Customer</a>
               </p>
           </div>
           </div>
       <div class="col-sm-4">
           <div class="circle">
           <img src="imgadmin/img14.jpg" class="img1 img-thumbnail img-responsive">
       </div>
           <div class="caption">
           <h3 class="h">See the Details of pending tailor from here...</h3>
           <p>
               <a href="pendingtailor.php" class="btn btn-primary" role="button">Pending tailor</a>
           </p>
             </div>
            </div>
           </div>
              <div class="row">
              <div class="col-sm-4">
              <div class="circle">
               <img src="imgadmin/total%20customer.jpg" class="img1 img-thumbnail img-responsive">
           </div>
                   <div class="caption">
                       <h3 class="hh">See the details of total customer from here...</h3>
                       <p>
                           <a href="totalcustomer.php" class="btn btn-primary" role="button">Total Customer</a>
                       </p>
                   </div>
                  </div>
       <div class="col-sm-4">
               <div class="circle">
           <img src="imgadmin/total%20tailor.jpg" class="img1 img-thumbnail img-responsive">
            </div>
               <div class="caption">
                   <h3 class="hh">See the details of total tailor from here...</h3>
                   <p>
                       <a href="totaltailor.php" class="btn btn-primary" role="button">Total Tailor</a>
                   </p>
               </div>
           </div>
                   <div class="col-sm-3">
           <div class="circle">
           <img src="images/images(116).jpg" class="img1 img-thumbnail img-responsive">
       </div>
           <div class="caption">
           <h3 class="h">Add the products...</h3>
           <p>
               <a href="addproduct.php" class="btn btn-primary" role="button">Add products</a>
           </p>
             </div>
                  </div>       
     
       </div>
       </div>  
    </body>
    </html>
