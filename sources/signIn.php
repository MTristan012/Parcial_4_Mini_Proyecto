<?php
    if (empty($_SESSION["id"])){
        
    }else{
        header("Location:../sources/main.php");
    }
    require '../views/signIn.view.php'
?>