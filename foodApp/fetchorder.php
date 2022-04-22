<?php
// $order_no ='';
$item_name =''; 
$price = '';
// $email_id= $email;
$name='';

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
//   if (mysqli_num_rows($result2) > 0) {
    
//     while($row = mysqli_fetch_assoc($result2)) {
//         $email = $row['email'];
//         $name =$row['fname'];
//     }
//   } 

if (mysqli_num_rows($result2) > 0) {
    
    while ($row = mysqli_fetch_assoc($result2)){
    if($row['email']==$email){
        // $email = $row['email'];
        $name =$row['fname'];
        break;
    }
 
    }
    $sql3 = "INSERT INTO `order_table` (`id`, `order_no`, `item_name`, `price`, `email`, `name`,`address`,`qty`,`total_price`) VALUES ('', '$order_no', '$item_name', '$price', '$email', '$full_name','$address','$qty','$total_price')";
$con->query($sql3);

 }






  
  else {
    echo "0 results";
  }
  



?>