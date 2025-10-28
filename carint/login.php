<?php
session_start();
if (isset($_SESSION["id"])) {
  header("location: index.php");
} else {
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="images/fevicon.png" type="image/x-icon">
  <title>Carint</title>
  <link rel="stylesheet" href="css/signup.css">
  <link rel="stylesheet" href="bootstrap-5.3.8-dist/css/bootstrap.css">
</head>
<body>

<form class="row g-4 w-80 m-5" action="classes/includes/login.php" method="post">
  <div class="form-group ">
    <label for="exampleInputEmail1" class="fs-5">Email Address</label>
    <input type="email" class="form-control" id="inputEmail4" name="email"  
    <?php
      if (isset($_SESSION["form"]) & isset($_SESSION["error"]["pwd"]) & !isset($_SESSION["error"]["email"])) {
        ?>
          value="<?php echo htmlspecialchars($_SESSION["form"]);  ?>"
        <?php
      }
    ?>
    placeholder="put your email address" name="email" 
    >
    <?php
      if (isset($_SESSION["error"]["email"])) {
        ?>
          <small id="emailHelp" class="form-text text-danger ms-2">
        <?php
          echo htmlspecialchars($_SESSION["error"]["email"]);
        ?>
          </small>
        <?php
      }
    ?>
    
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" class="fs-5">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1"  placeholder="key in your password" name="pwd">
    <?php
      if (isset($_SESSION["error"]["pwd"])) {
        ?>
          <small id="emailHelp" class="form-text text-danger ms-2">
        <?php
          echo htmlspecialchars($_SESSION["error"]["pwd"]);
        ?>
          </small>
        <?php
      }
    ?>
  </div>

  <button type="submit" class="btn btn-primary mt-4">Submit</button>
</form>

<script src="javascript/signup.js"> </script>
<script src="bootstrap-5.3.8-dist/js/bootstrap.js" ></script>
</body>
</html>

<?php

}

?>