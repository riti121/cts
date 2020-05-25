<?php
    $ccode=$_POST['ccode'];
    $con=mysqli_connect('localhost','root','','tailor');
    $q="update Customerregistration set  status='V' where ccode=$ccode";
    $query=mysqli_query($con,$q);
    mysqli_close($con);
    echo "done";
?>
