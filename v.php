<?php
    $ccode=$_POST['ccode'];
    $con=mysqli_connect('localhost','root','','tailor');
    $q="update customerregistration set  send='Y' where email='$userid'&& ccode=$ccode";
    $query=mysqli_query($con,$q);
    mysqli_close($con);
    echo "done";
?>
