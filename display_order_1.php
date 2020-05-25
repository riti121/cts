
        <div class="grid_10">
            <div class="box round first">
                <h2>
                    Order Items</h2>
                <div class="block">
           
                    
    <?php
                    
                  
                    echo "<table border='1'>";
                    echo "<tr>";
                    echo "<td>"; echo "product image"; echo "</td>";
                    echo "<td>"; echo "product name"; echo "</td>";
                        echo "<td>"; echo "product price"; echo "</td>";
                        echo "<td>"; echo "product Qty"; echo "</td>";
                        echo "<td>"; echo "product total"; echo "</td>";
                echo "</tr>";
    ?>
                    
                 <?php   
                       $id=$_GET["id"];
                    $con=mysqli_connect("localhost","root","","tailor");

                    $query="select * from cottonkurti where order_id='$id'";
                    $result=mysqli_query($con,$query);
                    while($row=mysqli_fetch_array($result))
                    {
                    echo "<tr>";
                    echo "<td valign='top'>"; ?> <img src="<?php echo $row["product_image"]; ?>" height="100" width="100"> <?php echo "</td>";
                    echo "<td valign='top'>"; echo $row["product_name"]; echo "</td>";
                    echo "<td valign='top'>"; echo $row["product_price"]; echo "</td>";
                        echo "<td valign='top'>"; echo $row["product_qty"]; echo "</td>";
                        echo "<td valign='top'>"; echo $row["product_total"]; echo "</td>";
                        
                     echo "</td>";
                    echo "</tr>";

                }
                echo "</table>";
?>
                </div>
            </div>
     
     