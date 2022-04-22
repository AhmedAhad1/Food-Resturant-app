<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="adminStyle.css">
  </head>
<body class ='admin-edit-delete min-vh-100'>





<?php

$con = mysqli_connect('localhost','root','','fooddelivery');

  
if(!$con){
  die("connection failed".mysqli_connect_error());
}
$edit = $_SESSION["edit"];


echo '

<div
      class="container mt-5"
    style ="width:1000px";>
    <h1 class ="text-center text-light mb-5">Edit Menu</h1>
<form action="" method="post" >
<div class="form-floating mb-3">
<input type="text" class="form-control" name = "type" required>
<label for="floatingTextarea">Type</label>
</div>

<div class="form-floating mb-3">
<input type="text" class="form-control" name = "item_name" required>
<label for="floatingTextarea">Item name</label>
</div>
<div class="form-floating mb-3">
<input type="text" class="form-control" name = "price" required>
<label for="floatingTextarea">Price</label>
</div>
      <button type="submit" name="submit-btn" class ="btn btn-primary mt-4" id ="signup" >Confirm Changes</button>
    </form>';
if(isset($_POST['submit-btn'])){
    $type = $_POST['type'];
    $item_name = $_POST['item_name'];
    $price = $_POST['price'];
    mysqli_query($con,"UPDATE `menu_table` SET `type` = '$type', `name` = '$item_name', `price` = '$price' WHERE `menu_table`.`order_no` = '$edit';");
    echo '
    <div class= "container">
    <div class="d-flex flex-column justify-content-center align-itmes-center">
    <div class="alert alert-primary mt-5 text-center" role="alert" >
   submitted
  </div>
  </div>
  </div>';
}


?>

<form action="" method="post">
      <button type="submit" name="btn-back" class = "btn btn-success mt-3">GO Back</button>
    </form>

<?php

if(isset($_POST['btn-back'])){
  echo "<script> location.replace('showMenu.php'); </script>";
}


?>





<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>