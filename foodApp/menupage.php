<?php
session_start();

$email = $_SESSION['email'];
$con = mysqli_connect('localhost','root','','fooddelivery');
if(!$con){
    die("connection failed".mysqli_connect_error());
  }
  
  $sql = "SELECT * FROM menu_table";
  
  $result = mysqli_query($con, $sql);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Meat Us Menu</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body class="homepage-body">
    <?php include "navbar.php";?>
    <div class="container-fluid p-0">
      <div
        id="carouselExampleInterval"
        class="carousel slide"
        data-bs-ride="carousel"
      >
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000">
            <img
              src="foodGallery/burger-banner.jpg"
              class="d-block w-100 img-banner"
              alt="..."
            />
          </div>
          <div class="carousel-item" data-bs-interval="10000">
            <img
              src="foodGallery/pizza-banner.jpg"
              class="d-block w-100 img-banner"
              alt="..."
            />
          </div>
          <div class="carousel-item" ata-bs-interval="10000">
            <img
              src="foodGallery/pasta-banner.jpg"
              class="d-block w-100 img-banner"
              alt="..."
            />
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselExampleInterval"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselExampleInterval"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>


    <section class="burger-section p-5 text-light" id='burger'>
      <div class="container">
        <div class="row">
          <h1 class="text-center mb-5">Our Burgers</h1>
         
         
<?php
  while($row = mysqli_fetch_assoc($result)) {
   if (strtolower($row['type']) == strtolower('burger')){
      $name= $row['name'];
      $price = $row['price'];
      $img = $row['image'];
      $id = $row['order_no'];
      $description =$row['description'];
      
       echo "
       
       <div class='col-md-4 d-flex justify-content-center align-items-stretch'>
       <form action='' method = 'post'>
       <div class='card cust-card-bg' style='width: 18rem'>
         <img
           src='foodGallery/$img'
           class='card-img-top cust-card-img'
           
         />
         <div class='card-body d-flex flex-column'>
           <h5 class='card-title primary-text'>$name</h5>
           <p class='card-text'>
             $description
           </p>
           <div
             class='d-flex justify-content-between align-items-center mt-auto'
           >
             <h4 class='primary-text m-0'>$price tk</h4>
             <button type = 'submit' name ='order' value = $id class='btn btn-danger'> Order Item</button>
             </div>
         </div>
       </div>
     </div>
     </form>";

     
  
   }
   
}
mysqli_data_seek($result,0);
   
// if (isset($_POST['order'])){
//   $order_no = $_POST['order'];
//   include "fetchorder.php";
  

 
// }


?>
     
      
      </div>
      </div>    
    </section>
<div class ="d-flex justify-content-center">
  <hr class = "text-light w-75 ">
</div>

    <section class="pizza-section p-5 text-light"id='pizza'>
      <div class="container">
        <div class="row">
          <h1 class="text-center mb-5">Our Pizzas</h1>
          <?php
  while($row = mysqli_fetch_assoc($result)) {
   if (strtolower($row['type']) == strtolower('pizza')){
      $name= $row['name'];
      $price = $row['price'];
      $img = $row['image'];
      $id = $row['order_no'];
      $description =$row['description'];
      
       echo "
       
       <div class='col-md-4 d-flex justify-content-center'>
       <form action='' method = 'post'>
       <div class='card cust-card-bg' style='width: 18rem'>
         <img
           src='foodGallery/$img'
           class='card-img-top cust-card-img'
           
         />
         <div class='card-body d-flex flex-column'>
           <h5 class='card-title primary-text'>$name</h5>
           <p class='card-text'>
           $description
           </p>
           <div
             class='d-flex justify-content-between align-items-center mt-auto'
           >
             <h4 class='primary-text m-0'>$price tk</h4>
             <button type = 'submit' name ='order' value = $id class='btn btn-danger'> Order Item</button>
             </div>
         </div>
       </div>
     </div>
     </form>";

     
  
   }
   
}
mysqli_data_seek($result,0);
   
// if (isset($_POST['order'])){
//   $order_no = $_POST['order'];
//   include "fetchorder.php";
  

 
// }


?>
      </div>
      </div>

    </section>
    <div class ="d-flex justify-content-center">
  <hr class = "text-light w-75 ">
</div>
    <section class="pasta-section p-5 text-light" id='pasta'>
      <div class="container">
        <div class="row">
          <h1 class="text-center mb-5">Our Pastas</h1>
          <?php
  while($row = mysqli_fetch_assoc($result)) {
   if (strtolower($row['type']) == strtolower('pasta')){
      $name= $row['name'];
      $price = $row['price'];
      $img = $row['image'];
      $id = $row['order_no'];
      $description =$row['description'];
      
       echo "
       
       <div class='col-md-4 d-flex justify-content-center'>
       <form action='' method = 'post'>
       <div class='card cust-card-bg' style='width: 18rem'>
         <img
           src='foodGallery/$img'
           class='card-img-top cust-card-img'
           
         />
         <div class='card-body d-flex flex-column'>
           <h5 class='card-title primary-text'>$name</h5>
           <p class='card-text'>
           $description
           </p>
           <div
             class='d-flex justify-content-between align-items-center mt-auto'
           >
             <h4 class='primary-text m-0'>$price tk</h4>
             <button type = 'submit' name ='order' value = $id class='btn btn-danger'> Order Item</button>
             </div>
         </div>
       </div>
     </div>
     </form>";

     
  
   }
   
}
mysqli_data_seek($result,0);
   
// if (isset($_POST['order'])){
//   $order_no = $_POST['order'];
//   include "fetchorder.php";
  

 
// }


?>
      </div>
      </div>

    </section>
    <div class ="d-flex justify-content-center">
  <hr class = "text-light w-75 ">
</div>

    <section class="shake-section p-5 text-light" id='shake'>
      <div class="container">
        <div class="row g-5 ">
          <h1 class="text-center mb-5">Our Shakes</h1>
          <?php
  while($row = mysqli_fetch_assoc($result)) {
   if (strtolower($row['type']) == strtolower('shake')){
      $name= $row['name'];
      $price = $row['price'];
      $img = $row['image'];
      $id = $row['order_no'];
      $description =$row['description'];
      
       echo "
       
       <div class='col-md-4 d-flex justify-content-center'>
       <form action='' method = 'post'>
       <div class='card cust-card-bg' style='width: 18rem'>
         <img
           src='foodGallery/$img'
           class='card-img-top cust-card-img'
           
         />
         <div class='card-body d-flex flex-column'>
           <h5 class='card-title primary-text'>$name</h5>
           <p class='card-text'>
           $description
           </p>
           <div
             class='d-flex justify-content-between align-items-center mt-auto'
           >
             <h4 class='primary-text m-0'>$price tk</h4>
             <button type = 'submit' name ='order' value = $id class='btn btn-danger'> Order Item</button>
             </div>
         </div>
       </div>
     </div>
     </form>";

     
  
   }
   
}
mysqli_data_seek($result,0);
   
if (isset($_POST['order'])){
  $order_no = $_POST['order'];
  $_SESSION['order_no'] = $order_no;
  echo "<script> location.replace('viewOrder.php'); </script>";
  // include "fetchorder.php";
  

 
}


?>
        </div>
      </div>
    </section>
    <!-- script -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
