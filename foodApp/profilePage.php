<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/5f7d2b3f46.js" crossorigin="anonymous"></script>
  </head>

  <?php

  include "navbar.php";
  $fname = $_SESSION['fname'];
  $lname = $_SESSION['lname'];
  $email = $_SESSION['email'];
  $password= $_SESSION['password'];
 
  ?>
  <body>
  <section class ='profile-page-section min-vh-100'>
    <div class="container ">

      <h1 class = 'text-center p-5 profile-title'>How's it going, <?php echo $fname;?> 
      <i class="fa-solid fa-person-digging mx-3"></i>
    </h1>
      <ul class="list-group ">
      <li class="list-group-item d-flex gap-5 ">
        <span>First Name</span>
        <span><?php echo $fname; ?></span> 
      </li>
      <li class="list-group-item d-flex gap-5 ">
        <span>Last Name</span>
        <span><?php echo $lname; ?></span> 
      </li> <li class="list-group-item d-flex gap-5 ">
        <span>Email</span>
        <span><?php echo $email; ?></span> 
      </li> <li class="list-group-item d-flex gap-5 ">
        <span>Password</span>
        <span><?php echo $password; ?></span> 
      </li>
    </ul>
    <form action="" method = "post">
      <button type="submit" name="submit" class ="btn btn-danger mt-4" id ="" >Edit Information</button>
    </form>
    <form action="" method = "post">
      <button type="submit" name="order" class ="btn btn-primary mt-4" id ="" >View my orders</button>
    </form>
    </div>





<?php
if (isset($_POST['order'])){

  include 'viewOrderProfile.php';
}


?>


  
<?php
if (isset($_POST['submit'])){
  
echo '

<div
      class="container mt-5 p-3"
    style ="width:1000px";>
  <h1 class= "mb-3 profile-title">Edit Profile</h1>
<form action="" method="post" >
<div class="form-floating mb-3">
<input type="email" class="form-control" name = "email" required>
<label for="floatingInput">Email address</label>
</div>
<div class="form-floating mb-3">
<input type="text" class="form-control" name = "fname" required>
<label for="floatingTextarea">First Name</label>
</div>
<div class="form-floating mb-3">
<input type="text" class="form-control" name = "lname" required>
<label for="floatingTextarea">Last name</label>
</div>
<div class="form-floating mb-3">
<input type="password" class="form-control" name = "password" required>
<label for="floatingTextarea">Password</label>
</div>
      <button type="submit" name="edit-btn" class ="btn btn-success mt-4">Confirm Changes</button>
    </form>';

}

if(isset($_POST['edit-btn'])){

  include 'connect.php';
  $sql2 = "SELECT * FROM user_table";
  $result2 = mysqli_query($con, $sql2);
  
  $exist= false;
 
  $email_secondary = $_POST['email'];
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $password = $_POST['password'];
    if (mysqli_num_rows($result2) > 0) {
      
      while ($row = mysqli_fetch_assoc($result2)){

        if($row['email']==$email_secondary){
          if($row['email'] == $email){
            continue;
          }
          else{
            $exist = true;
          }  
          
        }
        
      }
      
      
    }
    if(!$exist){
     $sql = "UPDATE `user_table` SET `email` = '$email_secondary', `fname` = '$fname',`lname`='$lname',`password` = '$password' WHERE `user_table`.`email` = '$email'";
     mysqli_query($con,$sql);
   
  
  //   echo '
  //   <div class= "container">
  //   <div class="d-flex flex-column justify-content-center align-itmes-center">
  //   <div class="alert alert-primary mt-5 text-center" role="alert" >
  //  submitted
  // </div>
  // </div>
  // </div>';
  session_destroy();
  echo "<script> location.replace('profileUpdated.php'); </script>";
    }

     
else{
  echo '
  <div class= "container">
  <div class="d-flex flex-column justify-content-center align-itmes-center">
  <div class="alert alert-danger mt-5 text-center" role="alert" >
 Email already registered try a different one
</div>
</div>';
$exist = false;
}

}

?>
    
    </div>
    </section>
    <script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
