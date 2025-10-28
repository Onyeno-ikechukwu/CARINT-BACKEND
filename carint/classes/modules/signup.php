<?php

function emptyCheck($email){
  if (empty($email)) {
    return true;
  } else {
    return false;
  }
}

function emailcheck($email){
  if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    return true;
  } else {
    return false;
  }
}
