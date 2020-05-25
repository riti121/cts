<?php
 $con=mysqli_connect('localhost','root','','tailor');
 echo $id=$_GET['id'];
$query="select * from  product where id='$id'";
$run=mysqli_query($con,$query);
while($row=mysqli_fetch_array($run))
{
    $id=$row['id'];
    $name=$row['item'];
    $image=$row['image'];
    
  $query="insert into cart(cname,cimage,cprice,cdiscription)VALUES('$name','$image')";
    if(mysqli_query($query)){
        header("location:shopkurti.php?mes=insert");
    }
    else{
        header("locaton:shopkurti.php?mes=not");
    }
}


?>