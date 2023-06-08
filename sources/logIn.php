<?php
if (!empty($_SESSION["id"])){
        header("../sources/logIn.php");
    }
    require '../views/logIn.view.php'
?>