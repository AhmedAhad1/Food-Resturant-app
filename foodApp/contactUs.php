
<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Us</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <script src="https://kit.fontawesome.com/5f7d2b3f46.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
  </head>
  <body class = "contact-us-body">



  <?php

    include "insert.php";
    include "navbar.php";

    ?>

    <section class="">
      <div
        class="container min-vh-100 d-flex flex-column justify-content-center p-5"
      >
     
        <div class="row align-items-center">
        
          <div class="col-md">
          </div>
          <div class="col-md-6">
          
            <form action="" method ="post">
            <div class="row g-3">
            <h3 class="text-center fw-bolder pb-5 text-light">Contact Us</h3>
                <div class="col-md-6 text-light">
                  <label for="firstname" class="form-label">First Name</label>
                  <input type="text" class="form-control" name="fname" placeholder="Your name here" required />
                </div>
                <div class="col-md-6 text-light">
                  <label for="lastname" class="form-label">Last Name</label>
                  <input type="text" class="form-control" name="lname" placeholder="Your family name here"required />
                </div>
                <div class="col-md-6 text-light">
                  <label for="inputEmail4" class="form-label">Email</label>
                  <input type="email" class="form-control" name="email" placeholder="Your email here" required/>
                </div>
                
                <div class="col-md-6 text-light">
                  <label for="inputAddress2" class="form-label"
                    >Phone Number</label
                  >
                  <input
                    type="phone"
                    class="form-control"
                    id="inputAddress2"
                    name="phone"
                    placeholder="Phone"
                    required
                  />
                </div>
                <div class="col-md-12 text-light">
                  <label for="inputAddress" class="form-label" >Address</label>
                  <input
                    type="text"
                    class="form-control"
                    id="inputAddress"
                    name="address"
                    placeholder="123 st, Dhaka"
                    required
                  />
                </div>
                <div class="col-md-12 text-light">
                  <label for="inputCity" class="form-label">Message</label>
                  <input
                    type="textarea"
                    class="form-control"
                    id="inputCity"
                    name="message"
                    placeholder="Right your thoughts.."
                    required
                  />
                </div>

                <div class="col-12 d-flex justify-content-center">
                  <button
                    type="submit"
                    name="submit"
                    class="btn btn-danger mt-4 "
                  >
                  <i class="fa-solid fa-message mx-2"></i>
                    Send Message
                  </button>
                </div>
              </form>
              
              
            </div>
          
            
          </div>
          <div class="col-md"></div>
      </div>
     
      
    </section>
  


    <!--  -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
    <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
  </body>
</html>
