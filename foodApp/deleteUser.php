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
$delete = $_SESSION["delete"];
mysqli_query($con,"DELETE FROM `user_table` WHERE `user_table`.`email` = '$delete'");


echo '
    <div class= "container">
    <div class="d-flex flex-column justify-content-center align-itmes-center">
    <div class="alert alert-danger mt-5 text-center" role="alert" >
   User Deleted
  </div>
  </div>
  <form action="" method="post">
      <button type="submit" name="btn-back" class = "btn btn-success mt-3">GO Back</button>
    </form>
  </div>';



?>



<?php

if(isset($_POST['btn-back'])){
  echo "<script> location.replace('showUser.php'); </script>";
}


?>





<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>