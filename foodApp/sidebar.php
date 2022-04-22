
<?php ;
// all coming from log-in
$fname = $_SESSION['fname'];
$lname = $_SESSION['lname'];
$display_name = $fname." ".$lname ;
?>


<!DOCTYPE html>
<html>
  <title>admin</title>

  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
    crossorigin="anonymous"
  />
  <link rel="stylesheet" href="adminStyle.css">
  <script src="https://kit.fontawesome.com/5f7d2b3f46.js" crossorigin="anonymous"></script>
  <body>
    <div
      class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark min-vh-100"
      style="width: 280px"
    >
      <a
        href="http://localhost/foodApp/admin.php"
        class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none"
      >
        
        <span class="fs-4">
        <i class="fa-solid fa-user-check mx-3"></i>
          <?php echo $display_name ; ?></span>
      </a>
      <hr />
      <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item nav-hover">
          <a href="http://localhost/foodApp/admin.php" class="nav-link text-white" aria-current="page">
          <i class="fa-solid fa-house-user mx-3"></i>
            Home
          </a>
        </li>
        <li class ='nav-item nav-hover'>
          <a href="http://localhost/foodApp/showMenu.php" class="nav-link text-white">
          <i class="fa-solid fa-circle-chevron-down mx-3"></i>
            View Menu
          </a>
        </li>
        <li class ='nav-item nav-hover'>
          <a href="http://localhost/foodApp/showOrder.php" class="nav-link text-white">
          <i class="fa-solid fa-truck mx-3"></i>
            View Orders
          </a>
        </li>
        <li class ='nav-item nav-hover'>
          <a href="http://localhost/foodApp/showUser.php" class="nav-link text-white">
          <i class="fa-solid fa-users mx-3"></i>
            Show Users
          </a>
        </li>
        <li class ='nav-item nav-hover'>
          <a href="http://localhost/foodApp/showMessages.php" class="nav-link text-white">
          <i class="fa-solid fa-message mx-3"></i>
            Messages
          </a>
        </li>
        <li class ='nav-item nav-hover'>
          <a href="logout.php" class="nav-link text-white">
          <i class="fa-solid fa-arrow-right-from-bracket mx-3"></i>
            Log out
          </a>
        </li>
      </ul>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
