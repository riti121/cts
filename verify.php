<?php
    $tcode=$_POST['tcode'];
    $con=mysqli_connect('localhost','root','','tailor');
    $q="update Tailorregistration set  status='V' where tcode=$tcode";
    $query=mysqli_query($con,$q);
    mysqli_close($con);
    echo "done";
?>
