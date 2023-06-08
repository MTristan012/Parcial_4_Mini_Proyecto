<?php
  session_start();
  if (isset($_SESSION['email'])){
    header('Location:./sources/main.php');
  } else {
    header('Location:./sources/logIn.php');
  }
?>