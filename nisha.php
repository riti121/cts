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
