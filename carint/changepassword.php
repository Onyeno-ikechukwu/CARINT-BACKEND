<?php
session_start();
if (!isset($_SESSION["id"])) {
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

<form class="row g-4 w-80 m-5" action="classes/includes/changepassword.php" method="post">

  <div class="form_group">
    <?php
      if (isset($_SESSION["success"])) {
        ?>
          <h5 id="emailHelp" class="form-text text-muted text-center">
        <?php
          echo htmlspecialchars($_SESSION["success"]);
        ?>
          </h5>
        <?php
      }
    ?>
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1" class="fs-5">Old Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1"  placeholder="key in your password" name="pwd1">
    <?php
      if (isset($_SESSION["error"]["pwd1"])) {
        ?>
          <small id="emailHelp" class="form-text text-danger ms-2">
        <?php
          echo htmlspecialchars($_SESSION["error"]["pwd1"]);
        ?>
          </small>
        <?php
      }
    ?>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" class="fs-5">New Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1"  placeholder="key in your password" name="pwd2">
    <?php
      if (isset($_SESSION["error"]["pwd2"])) {
        ?>
          <small id="emailHelp" class="form-text text-danger ms-2">
        <?php
          echo htmlspecialchars($_SESSION["error"]["pwd2"]);
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