
  
<?php ;
// all coming from log-in
$fname = $_SESSION['fname'];
$lname = $_SESSION['lname'];
// $email = $_SESSION['email'];
// $password= $_SESSION['password'];
$display_name = $fname." ".$lname ;
?>
<section class="nav-section">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3 fixed-top">
        <div class="container">
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarTogglerDemo03"
            aria-controls="navbarTogglerDemo03"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <a class="navbar-brand text-danger" href="homepage.php">
          Meat Us
          <img
            src="img/name.png"
            alt=""
            style="
              height: 30px;
              width: 30px;
              border-radius: 50%;
              margin-left: 1rem;
            "
          />
          </a>
          
          <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mb-2 mb-lg-0 ms-auto">
             
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="homepage.php">Home</a>
              </li>
             
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="menupage.php">Menu</a>
              </li>
              <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Items
          </a>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
            <li><a class="dropdown-item" href="menupage.php#burger">Burgers</a></li>
            <li><a class="dropdown-item" href="menupage.php#pizza">Pizzas</a></li>
            <li><a class="dropdown-item" href="menupage.php#pasta">Pastas</a></li>
            <li><a class="dropdown-item" href="menupage.php#shake">Shakes</a></li>
          </ul>
        </li>
              <li class="nav-item">
                <a class="nav-link" href="http://localhost/foodApp/contactUs.php">Contact us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="http://localhost/foodApp/profilePage.php">
                  <?php 
            echo $display_name;
            ?>
            </a>
            </li>
              <li class="nav-item">
                <a
                  class="nav-link "
                  href="logout.php"
                  
                  >Log Out</a
                >
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </section>
