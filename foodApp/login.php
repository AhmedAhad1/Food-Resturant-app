


<?php
session_start();
$login = false;
$admin = false;
$fname = '';
$lname = '';
$password = '';
$type = '';
if(isset($_POST['submit'])){

$email=$_POST['email'];
$password = $_POST['password'];

$con = mysqli_connect('localhost','root','','fooddelivery');
if(!$con){
    die("connection failed".mysqli_connect_error());
  }
  
  $sql = "SELECT * FROM user_table";
  
  $result = mysqli_query($con, $sql);
  while($row = mysqli_fetch_assoc($result)) {
    if($row['email']== $email && $row['password']==$password && strtolower($row['type']) == strtolower('user')){
      $fname = $row['fname'];
      $lname = $row['lname'];
      $password = $row['password'];
      $type = $row['type'];
      $login =true;
      break;
    }
    elseif($row['email']== $email && $row['password']==$password && strtolower($row['type']) == strtolower('admin')){
      $fname = $row['fname'];
      $lname = $row['lname'];
      $password = $row['password'];
      $type = $row['type'];
      $login =true;
      $admin =true;
      break;
    }
  }

  if($login == true && !$admin){
    $email = $_POST['email'];
    $_SESSION['email']= $email;
    $_SESSION['fname'] = $fname;
    $_SESSION['lname'] = $lname;
    $_SESSION['password'] = $password;
    $_SESSION['type'] = $type;
    header("Location: homepage.php");
  }
  if($login == true && $admin){

    $email = $_POST['email'];
    $_SESSION['email']= $email;
    $_SESSION['fname'] = $fname;
    $_SESSION['lname'] = $lname;
    $_SESSION['password'] = $password;
    $_SESSION['type'] = $type;
    header("Location: admin.php");
  }
  else{
      echo "<h3>Wrong Email or password</h3>";
  }


}
?>