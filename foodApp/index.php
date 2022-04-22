<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Meat U log in</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body class="index-body">
    <div
      class="container min-vh-100 d-flex flex-column justify-content-center p-5"
    >
      <div class="log-in p-4">
        <div class="row">
          <div class="col-md"></div>
          <div class="col-md-6 align-self-center text-light">
            <h1 class="text-center text-light">Log In</h1>
            <form action="" method="post">
              <div class="email">
                <label for="" class="mb-1">Email</label>
                <input
                  type="email"
                  name="email"
                  class="form-control mb-1"
                  placeholder="Enter Email"
                  required
                />
              </div>
              <div class="password">
                <label for="" class="form-label mb-1">Password</label>
                <input
                  type="password"
                  name="password"
                  class="form-control mt-2"
                  placeholder="Enter password"
                  required
                />
              </div>
              <div class="d-flex flex-column justify-content-center">
                <button
                  type="submit"
                  class="btn btn-danger mt-3 text-center cust-radious"
                  name= "submit"
                >
                  Sign in
                </button>
              </div>
            </form>
            <div class="mt-3">
            <span>Need an account?</span>
            <a href="signUp.php" target="_blank"class="cust-link">Sign Up</a>
            </div>
            <?php
    include "login.php";
    ?>
          </div>
          <div class="col-md"></div>
        </div>
      </div>
    </div>

   
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
