<?php

class login extends Db{
  private $email;
  private $pwd;

  public function __construct($email, $pwd){
    $this -> email = $email;
    $this -> pwd = $pwd;
  }



  private $error = [];
  private function formValidation(){
    if (emptyCheck($this -> email)) {
      $this -> error["email"] = "Put Your Email Address";
    }
    if (emailcheck($this -> email)) {
      $this -> error["email"] = "Invalid Email Address";
    }
    if (emptyCheck($this -> pwd)) {
      $this -> error["pwd"] = "Put Your Password";
    }
    return $this -> error;
  }

  private $id;

  private function push(){
    $query = "SELECT email, password, id FROM users WHERE email = ? LIMIT 3";
    $stmt = parent :: connection() -> prepare($query);
    $stmt -> execute([$this -> email]);
    $result = $stmt -> get_result() -> fetch_assoc();
    $stmt -> close();

      if ($result["email"] < 0) {
        $this -> error["email"] = "No Account With Such Email Exist";
        return $this -> error;
      } else if ($result["email"] > 0 & !password_verify($this -> pwd, $result['password'])) {
        $this -> error["pwd"] = "Incorrect password";
        return $this -> error;
      } else {
        $this -> id = $result["id"];
        return $this -> id;
      }
    
  }

  public function signin(){ 
    if ($this -> formValidation()) {
      $_SESSION["error"] = $this -> error;
      header("location: ../../login.php");
    } else if($this -> push()){
      unset($_SESSION["error"]);
      if ($this -> push() === $this -> error) {
        $_SESSION["error"] = $this -> error;
        header("location: ../../login.php");
      } else {
        unset($_SESSION["error"]);
        $_SESSION["id"] = $this -> id;
        header("location: ../../index.php");
      }
    }
    
  }
}