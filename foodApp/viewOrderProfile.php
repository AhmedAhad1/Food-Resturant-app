



 
  <?php


  
  echo"
  <div
      class='container mt-5'
    style ='width:1000px';>
  <table class = 'table table-success table-striped table-hover'>
  <tr>
  <th>Item Name</th> 
  <th>Price</th>
  <th>Quantity</th>
  <th>Total Cost</th>
  <th>Address</th>
</tr>";
 include "connect.php";

  $sql = "SELECT * FROM order_table";
  
  $result = mysqli_query($con, $sql);
  
  if (mysqli_num_rows($result) > 0) {
    
    while($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
      echo "<tr><td>". $row["item_name"]. "</td><td>".  $row["price"]."</td><td>". $row["qty"]."</td><td>". $row["total_price"]."</td><td>". $row["address"]."</td></tr>";
      // echo "<br>";
    }
  } 
  echo '</table>
        </div>';
  ?>
  
  