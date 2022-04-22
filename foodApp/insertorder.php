<?php
include 'connect.php';
$sql3 = "INSERT INTO `order_table` (`id`, `order_no`, `item_name`, `price`, `email`, `name`, `time`) VALUES ('', '$order_no', '$item_name', '$price', '$email', '$name', '')";
$con->query($sql3);

?>