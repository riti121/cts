<?php
function getcustomerpincode($email)
{
    $cn=mysqli_connect('localhost','root','','tailor');
    $sql="select pincode from Customerregistration where email='$email'";
    $result=mysqli_query($cn,$sql);
    $r=mysqli_fetch_array($result);
    $p=$r[0];
    mysql_close($cn);
    return $p;
}
?>
