<?php
    if (!empty($_SESSION["id"])){
        header("../sources/main.php");
    }
    require '../views/register.view.php'
?>