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

<form class="row g-3 w-80 m-5" action="classes/includes/signup.php" method="post" enctype="multipart/form-data">
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">First name</label>
    <input type="text" class="form-control" id="validationCustom01" name="fname" 
    <?php
      if (isset($_SESSION["error"]) & !isset($_SESSION["error"]["fname"])) {
        ?>
          value="<?php  echo htmlspecialchars($_SESSION["form"]["fname"]);  ?>"
        <?php
      }

    ?>
    required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Last name</label>
    <input type="text" class="form-control" id="validationCustom02" name="lname"
    
    <?php
      if (isset($_SESSION["error"]) & !isset($_SESSION["error"]["lname"])) {
        ?>
          value="<?php  echo htmlspecialchars($_SESSION["form"]["lname"]);  ?>"
        <?php
      }

    ?>
    
    required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustomUsername" class="form-label">Username</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend">@</span>
      <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" name="uname"
      
      <?php
      if (isset($_SESSION["error"]) & !isset($_SESSION["error"]["uname"])) {
        ?>
          value="<?php  echo htmlspecialchars($_SESSION["form"]["uname"]);  ?>"
        <?php
      }

    ?>
      
      required>
      <div class="invalid-feedback">
        Please choose a username.
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail4" name="email" 
    
    <?php
      if (isset($_SESSION["error"]) & !isset($_SESSION["error"]["email"])) {
        ?>
          value="<?php  echo htmlspecialchars($_SESSION["form"]["email"]);  ?>"
        <?php
      }

    ?>
    
    required>
  </div>
  <div class="col-md-6">
    <label for="phoneNumber" class="form-label">Phone Number</label>
    <div class="input-group">
      <span class="input-group-text">+234</span>
      <input type="tel" class="form-control" id="phoneNumber" name="number" 
      
      <?php
      if (isset($_SESSION["error"]) & !isset($_SESSION["error"]["number"])) {
        ?>
          value="<?php  echo htmlspecialchars($_SESSION["form"]["number"]);  ?>"
        <?php
      }

    ?>
      
      required>
    </div>
  </div>
  <div class="input-group pt-3 pb-3">
    <label class="input-group-text" for="inputGroupFile02">profile picture</label>
    <input type="file" class="form-control" id="inputGroupFile02" name="profile"  required>
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address" 
    
    <?php
      if (isset($_SESSION["error"]) & !isset($_SESSION["error"]["address"])) {
        ?>
          value="<?php  echo htmlspecialchars($_SESSION["form"]["address"]);  ?>"
        <?php
      }

    ?>
    
    required>
  </div>
  
  <div class="col-md-4">
    <label for="inputState" class="form-label">State</label>
    <select id="inputState" class="form-select" name="state" 
    
    <?php
      if (isset($_SESSION["error"]) & !isset($_SESSION["error"]["state"])) {
        ?>
          value="<?php  echo htmlspecialchars($_SESSION["form"]["state"]);  ?>"
        <?php
      }

    ?>
    
    required>
      <option selected>Choose...</option>
      <option value="Abia">Abia</option>
      <option value="Adamawa">Adamawa</option>
      <option value="Akwa Ibom">Akwa Ibom</option>
      <option value="Anambra">Anambra</option>
      <option value="Bauchi">Bauchi</option>
      <option value="Bayelsa">Bayelsa</option>
      <option value="Benue">Benue</option>
      <option value="Borno">Borno</option>
      <option value="Cross River">Cross River</option>
      <option value="Delta">Delta</option>
      <option value="Ebonyi">Ebonyi</option>
      <option value="Edo">Edo</option>
      <option value="Ekiti">Ekiti</option>
      <option value="Enugu">Enugu</option>
      <option value="Gombe">Gombe</option>
      <option value="Imo">Imo</option>
      <option value="Jigawa">Jigawa</option>
      <option value="Kaduna">Kaduna</option>
      <option value="Kano">Kano</option>
      <option value="Katsina">Katsina</option>
      <option value="Kebbi">Kebbi</option>
      <option value="Kogi">Kogi</option>
      <option value="Kwara">Kwara</option>
      <option value="Lagos">Lagos</option>
      <option value="Nasarawa">Nasarawa</option>
      <option value="Niger">Niger</option>
      <option value="Ogun">Ogun</option>
      <option value="Ondo">Ondo</option>
      <option value="Osun">Osun</option>
      <option value="Oyo">Oyo</option>
      <option value="Plateau">Plateau</option>
      <option value="Rivers">Rivers</option>
      <option value="Sokoto">Sokoto</option>
      <option value="Taraba">Taraba</option>
      <option value="Yobe">Yobe</option>
      <option value="Zamfara">Zamfara</option>
    </select>
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">City</label>
    <input type="text" class="form-control" id="inputCity" name="city" 
    
    <?php
      if (isset($_SESSION["error"]) & !isset($_SESSION["error"]["city"])) {
        ?>
          value="<?php  echo htmlspecialchars($_SESSION["form"]["city"]);  ?>"
        <?php
      }

    ?>
    
    required>
  </div>
  
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Password</label>
    <input type="password" class="form-control pwd" id="inputPassword4" name="pwd" required>
    <div class="valid-feedback password">
      
    </div>
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Confirm Password</label>
    <input type="password" class="form-control pwd2" name="conpwd" required>
    <div class="valid-feedback confirm">
      
    </div>
  </div>
  
  <div class="col-12">
    <button  class="btn btn-primary submit">Sign in</button>
  </div>
</form>
  <script src="javascript/signup.js"> </script>
  <script src="bootstrap-5.3.8-dist/js/bootstrap.js" ></script>
</body>
</html>

<?php

}

?>

