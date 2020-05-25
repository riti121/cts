<?php
 $con=mysqli_connect('localhost','root','','tailor');
if(isset($_POST["yes"]))
{
    $query="insert into customerregistration yes(yes) VALUES(:yes)";
    mysqli_query($con,$query);
     mysqli_close($con);
    
}

?>