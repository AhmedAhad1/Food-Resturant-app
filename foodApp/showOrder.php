
<?php
session_start();



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="bg-secondary bg-gradient">
    


<div class="container-fluid d-flex p-0">

<?php include "sidebar.php";?>
<form action='' method = 'post' class="w-100">
<h1 class="text-center bg-dark text-light m-0 p-3">Ordered Items</h1>
<table class = "table table-success table-striped table-hover">

 
  <?php

// if(isset($_POST['show'])) {
  
  echo"<tr>
  <th>ID</th> 
  <th>Order No</th>
  <th>Item Name</th>
  <th>Price</th>
  <th>Email</th>
  <th>Quantity</th>
  <th>Address</th>
  <th>Total Cost</th>
  <th>Options</th>
</tr>";
 include "connect.php";

  $sql = "SELECT * FROM order_table";
  
  $result = mysqli_query($con, $sql);
  
  if (mysqli_num_rows($result) > 0) {
    
    while($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
      echo "<tr><td>".$row['id']. "</td><td>". $row["order_no"]. "</td><td>". $row["item_name"]. "</td><td>".  $row["price"]."</td><td>". $row["email"]."</td><td>".$row['qty']. "</td><td>".$row['address']. "</td><td>".$row['total_price']. "</td>
      <td>
     
      <button type = 'submit'  name ='edit' value = $id class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#mod'>Edit</button>
      <button type = 'submit' name ='delete' value = $id class='btn btn-danger'>Delete</button>
   
      </td>
      </tr>";
      // echo "<br>";
    }
  } 
  
// }
  ?>
  
  </table>
  </form>
  </div>


<?php

if (isset($_POST['edit'])){

$edit = $_POST['edit'];
$_SESSION['edit'] = $edit;
echo "<script> location.replace('editOrder.php'); </script>";


// if(isset($_POST['email-btn'])){
//     $email = $_POST['email'];
//     $name = $_POST['name'];
//     mysqli_query($con,"UPDATE `order_table` SET `email` = '$email', `name` = '$name' WHERE `order_table`.`id` = '$edit'");


// }

}

if (isset($_POST['delete'])){
  $delete = $_POST['delete'];
  $_SESSION["delete"] = $delete;
  echo "<script> location.replace('deleteOrder.php'); </script>";
}



?>

<!-- script -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>