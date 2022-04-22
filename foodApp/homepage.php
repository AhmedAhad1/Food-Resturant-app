
<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Meat Us</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <script
      src="https://kit.fontawesome.com/5f7d2b3f46.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <?php include 'navbar.php' ?>
   
    <section class="hero-section text-light" style="height: 75vh">
      <div class="container header-container">
        <div class="row">
          <div class="col-md-6">
            <h1 class="hero-header">
              A delicious meal served in your plate, every single day
            </h1>
            <p class="mt-4">
              Whether you’re ordering a multi-course meal or grabbing a drink
              and pizza at the upscale atmosphere makes it perfect for dining
              with friends and family
            </p>
            <button class="btn btn-warning btn-hero">
            <a href="menupage.php" class=''>  
            Start Eating Now </a></button>
          </div>
        </div>
      </div>
    </section>
    <section class="items-section">
      <section class="main-section p-5">
        <div class="container">
          <div class="row">
            <div class="col-md-4 d-flex justify-content-center">
              <div class="p-3">
                <i class="fa-solid fa-burger fa-xl mb-4"></i>
                <p class="">
                  The hamburger — famous around the world — is certainly in the
                  top tier of “foods we love to fight over.”The use of mayo
                  inspires violence on both sides of the discussion.
                </p>
              </div>
            </div>
            <div class="col-md-4 d-flex justify-content-center">
              <div class="p-3">
                <i class="fa-solid fa-utensils fa-xl mb-4"></i>
                <p class="">
                  The approach to the menu was easy. We had no interest in
                  trying to reinvent food. We are known for our generous
                  portions of BBQ, Southern,plus a touch of Caribbean fun. We
                  will tell you now – save room for dessert!
                </p>
              </div>
            </div>
            <div class="col-md-4 d-flex justify-content-center">
              <div class="p-3">
                <i class="fa-solid fa-blender fa-xl mb-4"></i>
                <p class="">
                  pushes the envelope of cuisine. Taking its influences from our
                  team members’ culinary roots, blends traditional and
                  innovative techniques to create unique offerings using local
                  ingredients in all of its dishes.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <div class="food-section text-light">
        <div class="container">
          <div class="row pb-5">
            <div class="col-md-3">
              <div class="card cust-card-bg" style="width: 18rem">
                <img
                  src="foodGallery/burger-5.jpg"
                  class="card-img-top card-img"
                  alt="..."
                />
                <div class="card-body">
                  <h5 class="card-title">Burgers</h5>
                  <a href="menupage.php#burger" class="btn btn-warning mt-3">View Burgers</a>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card cust-card-bg" style="width: 18rem">
                <img
                  src="foodGallery/pizza-1.jpg"
                  class="card-img-top card-img"
                  alt="..."
                />
                <div class="card-body">
                  <h5 class="card-title">Pizzas</h5>
                  <a href="menupage.php#pizza" class="btn btn-warning mt-3">View Pizzas</a>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card cust-card-bg" style="width: 18rem">
                <img
                  src="foodGallery/pasta-3.jpg"
                  class="card-img-top card-img"
                  alt="..."
                />
                <div class="card-body">
                  <h5 class="card-title">Pastas</h5>
                  <a href="menupage.php#pasta" class="btn btn-warning mt-3">View Pastas</a>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card cust-card-bg" style="width: 18rem">
                <img
                  src="foodGallery/shake-2.jpg"
                  class="card-img-top card-img"
                  alt="..."
                />
                <div class="card-body">
                  <h5 class="card-title">Shakes</h5>
                  <a href="menupage.php#shake" class="btn btn-warning mt-3">View Shakes</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
