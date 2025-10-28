<?php

class change extends Db{
  private $pwd1;
  private $pwd2;

  public function __construct($pwd1,$pwd2) {
    $this->pwd1 = $pwd1;
    $this->pwd2 = $pwd2;
  }

  private $error = [];
  private function formValidation(){
    if (emptyCheck($this->pwd1)) {
      $this->error["pwd1"] = "Put Your Previous Password";
    }
    if (emptyCheck($this->pwd2)) {
      $this->error["pwd2"] = "Put Your New Password";
    }
    return $this -> error;
  }

  private function fetch(){
    if (isset($_SESSION["id"])) {
      $query = "SELECT password FROM users WHERE id = ? LIMIT 1";
      $stmt = parent :: connection() -> prepare($query);
      $stmt->execute([$_SESSION['id']]);
      $result = $stmt->get_result()->fetch_column();
      if (!password_verify($this->pwd1, $result)) {
        $this->error["pwd1"] = "incorrect password";
        return $this->error;
      } else {
        $query1 = "UPDATE users SET password = '".$this->pwd2."' WHERE id = ?";
        $stmt1 = parent :: connection() -> prepare($query);
        $stmt1->execute([$_SESSION['id']]);
        $_SESSION["success"] = "Password Change Successful";
        $stmt -> close();
        $stmt1 -> close();
      }
    }
  }

  public function change(){
    if ($this -> formValidation()) {
      $_SESSION["error"] = $this -> error;
      header("location: ../../changepassword.php");
    } else if ($this -> fetch() === $this -> error) {
      $_SESSION["error"] = $this -> error;
      header("location: ../../changepassword.php");
    } else {
      header("location: ../../changepassword.php");
    }
  }
}