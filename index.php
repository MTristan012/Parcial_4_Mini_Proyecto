<?php
  session_start();
  if (isset($_SESSION['email'])){
    header('Location:main.php');
  } else {
    header('Location:signIn.php');
  }
?>