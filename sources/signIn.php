<?php
    session_start();
    if (!empty($_SESSION["id"])){
        header("../sources/logIn.php");
    }
    require '../views/signIn.view.php'
?>