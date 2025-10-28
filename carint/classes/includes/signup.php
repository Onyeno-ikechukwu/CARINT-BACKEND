<?php

if ($_REQUEST["REQUEST_METHOD"] = "POST") {
  $fname = $_POST["fname"];
  $lname = $_POST["lname"];
  $uname = $_POST["uname"];
  $email = $_POST["email"];
  $number = $_POST["number"];
  $profile = $_FILES["profile"]["name"];
  $address = $_POST["address"];
  $state = trim($_POST["state"] ?? '');
  $city = $_POST["city"];
  $pwd = $_POST["pwd"];
  $conpwd = $_POST["conpwd"];


  $target = "../profiles/" . basename($profile);
  $check = $_FILES["profile"]["tmp_name"];

  require_once "../modules/db.php";
  require_once "../control/signup.php";
  require_once "../modules/signup.php";




  $signup = new signup($fname,$lname,$uname,$email,$number,$profile,$address,$state,$city,$pwd,$conpwd,$check,$target);
  session_start();
  unset($_SESSION["error"]);
  unset($_SESSION["form"]);
  $_SESSION["form"] = $_POST;
  $signup -> signUp();

}