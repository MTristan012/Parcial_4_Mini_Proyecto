<?php
    session_start();
    if (empty($_SESSION["id"])){
        header("Location:../sources/logIn.php");
    }
    require '../views/main.view.php'
?>