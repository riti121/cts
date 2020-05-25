<?php  
 //insert.php  
session_start();
$userid=$_POST['userid'];
 $host = "localhost";  
 $username = "root";  
 $password = "";  
 $database = "tailor";  
 try  
 {  
      $connect = new PDO("mysql:host=$host;dbname=$database",$username, $password);  
      $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
      if(isset($_POST["yes"]))  
      {  
           $query = "INSERT INTO Customerregistration (yes) VALUES (:yes)";  
           $statement = $connect->prepare($query);  
           $statement->execute(  
                array(  
                     'yes'     =>     $_POST["yes"]  
                )  
           );  
           $count = $statement->rowCount();  
           if($count > 0)  
           {  
                echo "Gender Inserted Successfully!";  
           }  
           else  
           {  
                echo 'Not Inserted';  
           }  
      }  
 }  
 catch(PDOException $error)  
 {  
      echo $error->getMessage();  
 }  
 ?>  
