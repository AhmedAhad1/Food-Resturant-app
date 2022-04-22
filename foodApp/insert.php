<?php

if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

// host,username,password,db;
$con = mysqli_connect('localhost','root','','fooddelivery');

if(!$con){
    die("connection failed".mysqli_connect_error());
}

else{
    echo "<div class='alert alert-primary mb-0' role='alert'>
    Your message has been sent! Thank you for your feedback
  </div>";
}

$sql ="INSERT INTO `contact_table` (`fname`, `lname`, `email`, `address`, `phone`, `message`) VALUES ('$fname', '$lname','$email', '$address', '$phone', '$message');";
$con->query($sql);

}

?>