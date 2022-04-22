<?php


if(isset($_POST["submit"])){
    $email = $_POST['email'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $type = 'user';
    $password = $_POST['password'];

include "connect.php";

$exist = false;

$sql2 = "SELECT * FROM user_table";

$result2 = mysqli_query($con, $sql2);

if (mysqli_num_rows($result2) > 0) {
    
    while ($row = mysqli_fetch_assoc($result2)){
    if($row['email']==$email){
$exist = true;
    
    }
 
    }


 }



if(!$exist){

$sql = "INSERT INTO `user_table` (`email`, `fname`, `lname`, `password`, `type`) VALUES ('$email', '$fname', '$lname', '$password', '$type')";
mysqli_query($con,$sql);
echo '
    <div class= "container">
    <div class="d-flex flex-column justify-content-center align-itmes-center">
    <div class="alert alert-success mt-5 text-center" role="alert" >
   Account successfully created ✌
  </div>
  </div>';

}

else{
    echo '
    <div class= "container">
    <div class="d-flex flex-column justify-content-center align-itmes-center">
    <div class="alert alert-danger mt-5 text-center" role="alert" >
   Email already registered
  </div>
  </div>';



}



}

?>