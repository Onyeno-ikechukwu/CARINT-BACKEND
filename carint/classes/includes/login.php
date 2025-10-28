<?php

if ($_REQUEST["REQUEST_METHOD"] = "POST") {
  $email = $_POST["email"];
  $pwd = $_POST["pwd"];

  require_once "../modules/db.php";
  require_once "../control/login.php";
  require_once "../modules/signup.php";


  $login = new login($email,$pwd);
  session_start();
  unset($_SESSION["error"]);
  unset($_SESSION["form"]);
  $_SESSION["form"] =  $email;
  $login -> signin();
}