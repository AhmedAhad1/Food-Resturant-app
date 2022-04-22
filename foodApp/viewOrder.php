
<?php 
session_start();
$address = '';
$qty = '';
$total_price ='';
include 'confirmOrder.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body class='view-order-body'>
    <?php include "navbar.php"?>
    <!-- Ordered item Detalis -->
    <div class="container d-flex flex-column min-vh-100 justify-content-center">
      <div class="row">
        <div class="col-md"></div>
        <div class="col-md-4">
          <h2 class='profile-title' >Your order</h2>
          <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between">
              <p class="m-0">Item Name</p>
              <p class="m-0"><?php echo $item_name ?></p>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <p class="m-0">Price</p>
              <p class="m-0"><?php echo $price ?></p>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <p class="m-0">Email</p>
              <p class="m-0"><?php echo $email ?></p>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <p class="m-0">Ordered By</p>
              <p class="m-0"><?php echo $full_name ?></p>
            </li>
          </ul>
          <form action="" method="post" class="">
            <div class="mt-5">
              <label for="" class="mb-2 text-light">Enter Quantity:</label>
              <input
                type="text"
                name="qty"
                class="form-control mb-1"
                placeholder="Quantity"
                
              />
            </div>
            <div class="mt-2">
              <label for="" class="mb-2 text-light">Enter your address:</label>
              <input
                type="text"
                name="address"
                class="form-control mb-1"
                placeholder="Address"
                
              />
            </div>
            
            <button
              class="btn btn-primary mt-3"
              
              name= 'order_now'
              type="submit"
            >
              Order Now
            </button>
            <button
              class="btn btn-secondary mt-3"
              
              name= 'cancel'
              type="submit"
            >
             Cancel
            </button>
          </form>
          <?php 
if (isset($_POST['order_now'])){
$address = $_POST ['address'];
$qty = $_POST['qty'];
$total_price = (int)$qty * (int)$price;

if ($total_price >0 && $qty!= '' && $address!=''){
  echo "
<div class= 'container'>
<div class='d-flex flex-column justify-content-center align-itmes-center'>
<div class='alert alert-primary mt-5 text-center' role='alert'>
Thank you for ordering!! your total cost is $total_price. You have ordered $qty $item_name(s)
</div>
</div>
</div>";
include "fetchorder.php";
}
else{
  echo "
  <div class= 'container'>
  <div class='d-flex flex-column justify-content-center align-itmes-center'>
  <div class='alert alert-danger mt-5 text-center' role='alert'>
  Invalid input
  </div>
  </div>
  </div>";
  
}

}
?>
        </div>
        <div class="col-md">
        </div>
      </div>
    </div>



<?php 

if(isset($_POST['cancel'])){
  echo"<script>location.replace('menupage.php')</script>";
}

?>


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
