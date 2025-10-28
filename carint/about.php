<?php
session_start();
unset($_SESSION["error"]);
unset($_SESSION["form"]);
unset($_SESSION["success"]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="images/fevicon.png" type="image/x-icon">
  <title>Carint</title>
  <link rel="stylesheet" href="bootstrap-5.3.8-dist/css/bootstrap.css">
  <link rel="stylesheet" href="css/about.css">
</head>
<body>
  <ul class="first">
    <li class="first1"><img src="images/call-192-svgrepo-com.svg" alt="" class="first1img"><div class="div">Call : +234 8100655045</div></li>
    <li class="first2"><img src="images/email-svgrepo-com.svg" alt="" class="first1img"><div class="div">Email : Onyenoikechukwu081006@gmail.com</div></li>
    <li class="first3"><img src="images/location-pin-svgrepo-com.svg" alt="" class="first1img"><div class="div">Location</div></li>
  </ul>
  <nav class="navbar navbar-expand-lg d-flex mt-0 mb-2">
    <div class="container-fluid d-flex">
      <a class="navbar-brand fw-bold fs-4 ms-2" href="#">Carint</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item ">
            <a class="nav-link fs-6 " aria-current="page" id="color2" href="index.php">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-6 text-rgb(45, 2, 45) ms-4" id="color2" href="service.php">SERVICES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-6 text-rgb(45, 2, 45) ms-4" id="color1" href="#">ABOUT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-6 text-rgb(45, 2, 45) ms-4" id="color2" href="contact.php">CONTACT US</a>
          </li>
          <li class="nav2ii nav-item">
          <?php
            if (isset($_SESSION["id"])) {
            require_once "classes/modules/db.php";
            $dbh = new Db;

            $query = "SELECT profile FROM users WHERE id = ? LIMIT 1";
            $stmt = $dbh -> connection() -> prepare($query);
            $stmt->execute([$_SESSION['id']]);
            $result = $stmt->get_result()->fetch_column();
            
            echo '<img src=" classes/profiles/'.$result.'" alt="" class="nav2iiimg nav2iii">';
            ?>
              </li>
            <?php
          } else {
          ?>
        
          <li class="nav-item">
            <a class="nav-link fs-6 text-rgb(45, 2, 45) ms-4" id="color2" href="#">LOGIN</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-6 text-rgb(45, 2, 45) ms-4" id="color2" href="signup.php">SIGNUP</a>
          </li>
        <?php
        }
        ?>
      </ul>
    </div>
  </div>
  </nav>
  <ul class="dropdown-menu nav3">
    <li>
      <?php 
      if (isset($_SESSION["id"])) {
        require_once "classes/modules/db.php";
        $dbh = new Db;

        $query = "SELECT username FROM users WHERE id = ? LIMIT 1";
        $stmt = $dbh -> connection() -> prepare($query);
        $stmt->execute([$_SESSION['id']]);
        $result = $stmt->get_result()->fetch_column();
        
        echo '<div class="dropdown-item fs-bold text-muted"> Username: '.strtoupper($result).'"</div>';
      }
    ?>
    
    </li>
    <li><a class="dropdown-item" href="changepassword.php">Change Password</a></li>
    <li><a class="dropdown-item" href="classes/sessiondie/sessiondie.php">Log Out</a></li>
  </ul>
 <div class="d-flex flex-wrap">
    <div class="second ">
      <h2 class="d-flex fw-bold">
        <div class="text-black">About</div>
        <div class="ms-2 second1">Us</div>
      </h2>
      <p class="length">
        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All
      </p>
      <button  class="four1">
        Read More
      </button>
    </div>
    <div class="img6">
      <img src="images/about-img.jpg" alt="" class="ps-5 img5">
    </div>
  </div>
  <div class="d-flex flex-wrap footer ">
    <div class="d-grid">
      <h4 class="fw-bold">Address</h4>
      <a href="" class="nav-link mt-3"><img src="images/location-pin-alt-svgrepo-com.svg" alt="" class="first1img1">location</a>
      <a href="" class="nav-link"><img src="images/phone-call-svgrepo-com.svg" alt="" class="first1img1"> Call +234 8100655045</a>
      <a href="" class="nav-link"><img src="images/email-8-svgrepo-com.svg" alt="" class="first1img1"> Onyenoikechukwu081006@gmail.com</a>
      <div class="d-flex  mt-4">
        <a href="" class="nav-link"><img src="images/facebook-svgrepo-com.svg" alt="" class="first1img2"></a>
        <a href="" class="nav-link"><img src="images/twitter-svgrepo-com.svg" alt="" class="first1img2"></a>
        <a href="" class="nav-link"><img src="images/whatsapp-svgrepo-com.svg" alt="" class="first1img2"></a>
        <a href="" class="nav-link"><img src="images/instagram-167-svgrepo-com.svg" alt="" class="first1img3"></a>
      </div>
    </div>
    <div class="footer1">
      <h4 class="fw-bold">Info</h4>
      <p class="width mt-4">necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful</p>
    </div>
    <div class="d-grid footer2">
      <h4 class="fw-bold">Links</h4>
      <a href="" class="nav-link mt-3">Home</a>
      <a href="" class="nav-link mt-3">About</a>
      <a href="" class="nav-link mt-3">Service</a>
      <a href="" class="nav-link mt-3">Contact Us</a>
    </div>
    <div class="footer3">
      <h4 class="fw-bold">Subscribe</h4>
      <form action="" method="post" class="mt-3">
        <input type="text" placeholder="Enter Email" ><br>
        <button class="fourii">
          Subscribe
        </button>
      </form>
    </div>
  </div>
  <p class="last">
    © 2025 All Rights Reserved By Free Html Templates
  </p>
<script src="bootstrap-5.3.8-dist/js/bootstrap.js" ></script>
<script src="javascript/index.js"></script>
</body>
</html>