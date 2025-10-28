<?php



class signup extends Db{
  private $fname;
  private $lname;
  private $uname;
  private $email;
  private $number;
  private $profile;
  private $address;
  private $state;
  private $city;
  private $pwd;
  private $conpwd;
  private $check;
  private $target;

  public function __construct($fname,$lname,$uname,$email,$number,$profile,$address,$state,$city,$pwd,$conpwd,$check,$target){
    $this->fname=$fname;
    $this->lname=$lname;
    $this->uname=$uname;
    $this->email=$email;
    $this->number=$number;
    $this->profile=$profile;
    $this->address=$address;
    $this->state=$state;
    $this->city=$city;
    $this->pwd=$pwd;
    $this->conpwd=$conpwd;
    $this->check=$check;
    $this->target=$target;
  }

  private function upload(){
    move_uploaded_file($this -> check,$this -> target);
  }


  private function push(){

    $this -> upload();

    $hashedpwd = password_hash($this->conpwd, PASSWORD_DEFAULT);


    $query = "INSERT INTO users (firstname, lastname, username, email, number, profile, address, state, city, password) VALUES (?,?,?,?,?,?,?,?,?,?);";
    $stmt = parent:: connection() -> prepare($query);
    $stmt-> execute([$this -> fname, $this -> lname, $this -> uname, $this -> email, $this -> number, $this -> target, $this -> address, $this -> state, $this -> city, $hashedpwd]);
    $conn = null;
    $stmt = null;
  }

  private function fetchId(){
    $query= "SELECT id FROM users WHERE username = ? LIMIT 1";
    $stmt = parent:: connection() -> prepare($query);
    $stmt -> execute([$this -> uname]);
    $result = $stmt->get_result()->fetch_column();
    session_start();
    $_SESSION['id'] = $result;
  }
    
  private $error = [];

  private function formValidation (){
    if (emptyCheck($this -> fname)) {
      $this -> error["fname"] = "Put Your First Name";
    }
    if (emptyCheck($this -> lname)) {
      $this -> error["lname"] = "Put Your Last Name";
    }
    if (emptyCheck($this -> uname)) {
      $this -> error["uname"] = "Put Your Username";
    }
    if (emptyCheck($this -> email)) {
      $this -> error["email"] = "Put Your Email";
    }
    if (emailcheck($this -> email)) {
      $this -> error["email"] = "Put Valid Email";
    }
    if (emptyCheck($this -> number) || !is_numeric($this -> number)) {
      $this -> error["number"] = "Put Valid Phone Number";
    }
    if (empty($this -> profile)) {
      $this -> error["profile"] = "Put Your Profile Picture";
    }
    if (emptyCheck($this -> address)) {
      $this -> error["address"] = "Put Your Address";
    }
    if (emptyCheck($this -> state)) {
      $this -> error["state"] = "Put Your State";
    }
    if (emptyCheck($this -> city)) {
      $this -> error["city"] = "Put Your City";
    }
    if (emptyCheck($this -> pwd)) {
      $this -> error["pwd"] = "Put Your Password";
    }
    if (emptyCheck($this -> conpwd) || $this -> pwd !== $this -> conpwd) {
      $this -> error["conpwd"] = "Put Your Confirm Password";
    }
    return $this -> error;
  }
  


  public function signUp(){
    if ($this -> formValidation()) {
      $_SESSION["error"] = $this -> error;
      header("location: ../../signup.php");
    } else {
      unset($_SESSION["error"]);
      unset($_SESSION["form"]);
      $this -> push();
      $this -> fetchId();
      header("location: ../../index.php");
    }
  }

}