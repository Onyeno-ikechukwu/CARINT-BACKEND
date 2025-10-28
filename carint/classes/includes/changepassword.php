<?php

if ($_REQUEST["REQUEST_METHOD"] = "POST") {
  $pwd1 = $_POST["pwd1"];
  $pwd2 = $_POST["pwd2"];

  require_once "../modules/db.php";
  require_once "../control/changepassword.php";
  require_once "../modules/signup.php";


  $change = new change($pwd1,$pwd2);
  session_start();
  unset($_SESSION["error"]);
  unset($_SESSION["form"]);
  $_SESSION["form"] =  $_POST;
  $change -> change();
}