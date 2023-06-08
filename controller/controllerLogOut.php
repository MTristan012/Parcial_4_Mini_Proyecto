<?php
    session_start();
    session_destroy();
    header("Location:../sources/logIn.php");
?>