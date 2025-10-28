<?php

class Db{
  private $servername = "p:DESKTOP-QR6GH12";
  private $username = "root";
  private $password = "";
  private $database = "carint";

  public function connection(){
   
  $conn = new mysqli($this -> servername,$this -> username,$this -> password,$this -> database);
    if ($conn -> connect_error) {
      die("connection failed:" .$con -> connect_error);
    }
    return $conn;
    $conn -> close();
  } 

}