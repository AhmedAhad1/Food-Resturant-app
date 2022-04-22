<?php



$order_no = $_SESSION['order_no'];
$email = $_SESSION['email'];

$item_name =''; 
$price = '';
$full_name='';

include 'connect.php';

  
  $sql = "SELECT * FROM menu_table WHERE order_no = $order_no";

  $result1 = mysqli_query($con, $sql);
  $sql2 = "SELECT * FROM user_table";

  $result2 = mysqli_query($con, $sql2);

  if (mysqli_num_rows($result1) > 0) {
    
       while ($row = mysqli_fetch_assoc($result1)){
        if($row['order_no']== $order_no){
        $order_no =$row['order_no'];
        $item_name = $row['name'];
        $price = $row['price'];
        break;
        }
    
       }




  } 
  if (mysqli_num_rows($result2) > 0) {
    
    while ($row = mysqli_fetch_assoc($result2)){
    if($row['email']==$email){
        $fname =$row['fname'];
        $lname = $row ['lname'];
        $full_name = $fname.' '.$lname;
        break;
    }
 
    }

 }


?>