<?php
    $type_id = $_GET['type_id'] ;
    

    $query_product_type = "SELECT * FROM tbl_product as p
    INNER JOIN tbl_type as t
    ON p.type_id = t.type_id
    WHERE p.type_id = $type_id
    ORDER BY p_id ASC"; 
    $result_pro =mysqli_query($con, $query_product_type) or die ("Error in query: 
        $query_type " . mysqli_error());
       
        echo  ' <table border="2" class="display table table-bordered" id="example1" align="center">';
  //หัวข้อตาราง
  echo "<thead>";
    echo "<tr>
      <th width='5%'>id</td>
      <th width=25%>type</td>
      <th width=30%>name</td>
      <th width=25%>price</td>
      <th width=25%>stock</td>
    
    </tr>";
    echo "</thead>";
        while($row = mysqli_fetch_array($result_pro)) {
        echo "<tr>";
          echo "<td>" .$row["p_id"] .  "</td> ";
          echo "<td>" .$row["type_name"] .  "</td> ";
          echo "<td>" .$row["p_name"] .  "</td> ";
          echo "<td>" .$row["price"] .  "</td> ";
          echo "<td>" .$row["stock"] .  "</td> ";
         
        echo "</tr>";
        }
      echo "</table>";
      //5. close connection
      mysqli_close($con);
        
?>
