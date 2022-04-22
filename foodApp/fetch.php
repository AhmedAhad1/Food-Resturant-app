
<div class="container">
<table class = "table table-dark table-hover table-striped w-75 m-auto">

 
  <?php

if(isset($_POST['show'])) {
  
  echo"<tr>
  <th>First Name</th> 
  <th>Last Name</th>
  <th>Email</th>
  <th>Address</th>
  <th>Phone</th>
  <th>Message</th>
</tr>";
  $con = mysqli_connect('localhost','root','','fooddelivery');
  
  if(!$con){
    die("connection failed".mysqli_connect_error());
  }
  
  $sql = "SELECT * FROM Contact_Table";
  
  $result = mysqli_query($con, $sql);
  
  if (mysqli_num_rows($result) > 0) {
    
    while($row = mysqli_fetch_assoc($result)) {
      echo "<tr><td>".$row['fname']. "</td><td>". $row["lname"]. "</td><td>". $row["email"]. "</td><td>".  $row["address"]."</td><td>". $row["phone"]. "</td><td>".$row['message']."</td></tr>";
      // echo "<br>";
    }
  } 
  
}
  ?>
  
  </table>

  </div>





