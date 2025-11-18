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
  <link rel="stylesheet" href="css/index.css">
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
          <a class="nav-link fs-6 " aria-current="page" id="color1" href="#">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fs-6 text-rgb(45, 2, 45) ms-4" id="color2" href="service.php">SERVICES</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fs-6 text-rgb(45, 2, 45) ms-4" id="color2" href="about.php">ABOUT</a>
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
            <a class="nav-link fs-6 text-rgb(45, 2, 45) ms-4" id="color2" href="login.php">LOGIN</a>
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
  <div class="background pt-5 pb-5">
    <div id="carouselExampleIndicators" class="carousel slide " data-bs-ride="carousel">
      <div class="carousel-indicators five">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner ">
        <div class="carousel-item active two" data-bs-interval="3500">
          <h1 class="fw-bold text-white">
            <div>WE ARE BEST </div>
            <div>TRANSPORT SERVICE</div>
          </h1>
          <P class="text-white three">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum magnam, voluptates distinctio, officia architecto tenetur debitis hic aspernatur libero commodi atque fugit adipisci, blanditiis quidem dolorum odit voluptas? Voluptate, eveniet?
          </P>
          <button class="four">
            Get A Quote
          </button>
        </div>
        <div class="carousel-item two" data-bs-interval="3000">
          <h1 class="fw-bold text-white">
            <div>WE ARE BEST </div>
            <div>TRANSPORT SERVICE</div>
          </h1>
          <P class="text-white three">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum magnam, voluptates distinctio, officia architecto tenetur debitis hic aspernatur libero commodi atque fugit adipisci, blanditiis quidem dolorum odit voluptas? Voluptate, eveniet?
          </P>
          <button class="four">
            Get A Quote
          </button>
        </div>
        <div class="carousel-item two" data-bs-interval="3000">
          <h1 class="fw-bold text-white">
            <div>WE ARE BEST </div>
            <div>TRANSPORT SERVICE</div>
          </h1>
          <P class="text-white three">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum magnam, voluptates distinctio, officia architecto tenetur debitis hic aspernatur libero commodi atque fugit adipisci, blanditiis quidem dolorum odit voluptas? Voluptate, eveniet?
          </P>
          <button  class="four">
            Get A Quote
          </button>
        </div>
      </div>
    </div>
  </div>

  <h2 class="second d-flex fw-bold">
    <div class="text-black">Our</div>
    <div class="ms-2 second1">Services</div>
  </h2>
  <div class="mt-2 second2 ">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration</div>

  <div class="d-flex second3 flex-wrap">
    <div class="d-flex pt-4 ps-4 ">
      <div><img src="images/s1.png" alt="" id="img"></div>
      <div class=" ms-4 me-5">
        <div class="fw-bold fs-5 text-black">AIR TRANSPORT</div>
        <div class="mt-2">fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using</div>
        <a href="" class="nav-link mt-3 fw-bold read">Read More</a>
      </div>
    </div>
    <div class="d-flex pt-4 ps-4 ms-5">
      <div><img src="images/s2.png" alt="" id="img2"></div>
      <div class=" ms-5  me-4">
        <div class="fw-bold fs-5 text-black">CARGO TRANSPORT</div>
        <div class="mt-2">fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using</div>
        <a href="" class="nav-link mt-3 fw-bold read">Read More</a>
      </div>
    </div>
  </div>

  <div class="d-flex second3 flex-wrap">
    <div class="d-flex pt-4 ps-4 ">
      <div><img src="images/s3.png" alt="" id="img3"></div>
      <div class=" ms-4 me-5">
        <div class="fw-bold fs-5 text-black">TRUCK TRANSPORT</div>
        <div class="mt-2">fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using</div>
        <a href="" class="nav-link mt-3 fw-bold read">Read More</a>
      </div>
    </div>
    <div class="d-flex pt-4 ps-4 ms-5">
      <div><img src="images/s4.png" alt="" id="img4" class="ms-3"></div>
      <div class=" ms-5  me-4">
        <div class="fw-bold fs-5 text-black">TRAIN TRANSPORT</div>
        <div class="mt-2">fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using</div>
        <a href="" class="nav-link mt-3 fw-bold read">Read More</a>
      </div>
    </div>
  </div>
  <div class="d-flex flex-wrap">
    <div class="second ">
      <h2 class="d-flex fw-bold">
        <div class="text-black">About</div>
        <div class="ms-2 second1">Us</div>
      </h2>
      <p class="length">
        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All
      </p>
      <a href="about.php">
        <button  class="four1">
          Read More
        </button>
      </a>
    </div>
    <div class="img6">
      <img src="images/about-img.jpg" alt="" class="ps-5 img5">
    </div>
  </div>
<div class="second4 pb-4">
  <div class="second pb-5">
    <h2 class="fw-bold text-white">Track Your Shipment</h2>
    <div class="text-white para mt-2">Iste reprehenderit maiores facilis saepe cumque molestias. Labore iusto excepturi, laborum aliquid pariatur veritatis autem, mollitia sint nesciunt hic error porro. Deserunt officia unde repellat beatae ipsum sed. Aperiam tempora consectetur voluptas magnam maxime asperiores quas similique repudiandae, veritatis reiciendis harum fuga atque.</div>
    <div class="mt-4">
      <form action="" method="get">
        <input type="text" placeholder="Enter Your Tracking Number" class="pt-2 pb-2 ps-4 input">
        <button class="pt-2 pb-2 track text-white">TRACK</button>
      </form>
    </div>
  </div>
</div>
<h2 class="d-flex fw-bold second">
  <div class="text-black">What Says Our</div>
  <div class="ms-2 second1">Client</div>
</h2>

<div id="carouselExampleCaptions"  class="carousel slide second5" data-bs-ride="carousel">
  <div class="carousel-item active" data-bs-interval="3000">
    <div class="d-flex">
      <div>
        <p class=" border pt-4 ps-3 pe-4 pb-4">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
        </p>
        <div class="d-flex mt-3 ">
          <img src="images/client-1.png" alt="" class="image">
          <div class="ms-3 mt-2">
            <div>Adipiscing</div>
            <div>Magna</div>
          </div>
        </div>
      </div>
      <div class="ms-4">
        <p class=" border pt-4 ps-3 pe-4 pb-4">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
        </p>
        <div class="d-flex mt-3 ">
          <img src="images/client-1.png" alt="" class="image">
          <div class="ms-3 mt-2">
            <div>Adipiscing</div>
            <div>Magna</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="carousel-item" data-bs-interval="2000">
    <div class="d-flex">
      <div>
        <p class=" border pt-4 ps-3 pe-4 pb-4">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
        </p>
        <div class="d-flex mt-3 ">
          <img src="images/client-2.png" alt="" class="image">
          <div class="ms-3 mt-2">
            <div>Adipiscing</div>
            <div>Magna</div>
          </div>
        </div>
      </div>
      <div class="ms-4">
        <p class=" border pt-4 ps-3 pe-4 pb-4">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
        </p>
        <div class="d-flex mt-3 ">
          <img src="images/client-2.png" alt="" class="image">
          <div class="ms-3 mt-2">
            <div>Adipiscing</div>
            <div>Magna</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="carousel-item" data-bs-interval="2000">
    <div class="d-flex">
      <div>
        <p class=" border pt-4 ps-3 pe-4 pb-4">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
        </p>
        <div class="d-flex mt-3 ">
          <img src="images/client-1.png" alt="" class="image">
          <div class="ms-3 mt-2">
            <div>Adipiscing</div>
            <div>Magna</div>
          </div>
        </div>
      </div>
      <div class="ms-4">
        <p class=" border pt-4 ps-3 pe-4 pb-4">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
        </p>
        <div class="d-flex mt-3 ">
          <img src="images/client-1.png" alt="" class="image">
          <div class="ms-3 mt-2">
            <div>Adipiscing</div>
            <div>Magna</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  

  <div class="div9">
    <button class="carousel-control-prev div9i" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <img src="./images/prev.png" alt="" class=" ms2 ">
    </button>
    <button class="carousel-control-next div9ii" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <img src="./images/next.png" alt="" class=" ms2 ">
    </button>
  </div>
</div>

<h2 class="d-flex fw-bold second">
  <div class="text-black">Contact Us</div>
</h2>

<form action="" method="post" class="second7">
  <div class="mb-3">
    <input type="email" class="form-control form-control1 fs-6 text-black" id="exampleFormControlInput1" placeholder="Your Name">
  </div>
  <div class="mb-3">
    <input type="email" class="form-control form-control1 fs-6 text-black" id="exampleFormControlInput1" placeholder="Phone Number">
  </div>
  <div class="mb-3">
    <input type="email" class="form-control form-control1 fs-6 text-black" id="exampleFormControlInput1" placeholder="Email">
  </div>
  <div class="mb-3">
    <textarea class="form-control pt-5" id="exampleFormControlTextarea1" rows="3" placeholder="Message"></textarea>
  </div>
  <button class="fouri">
    SEND
  </button>
</form>
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
  © 2025 All Rights Reserved By Onyeno Ikechukwu
</p>

<script src="bootstrap-5.3.8-dist/js/bootstrap.js" ></script>
<script src="javascript/index.js"></script>
</body>

</html>
