<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    

<div class="container-fluid d-flex p-0 bg-secondary">

<?php include "sidebar.php";?>
<form action='' method = 'post' class="w-100">
<h1 class="text-center bg-dark text-light m-0 p-3 ">Messages</h1>
<table class = "table table-primary table-hover table-striped">

  <?php


  
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
  } else {
    echo "0 results";
  }
  

  ?>
  
  </table>

  </div>







  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>