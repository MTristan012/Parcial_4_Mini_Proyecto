<?php
session_start();
if (!empty($_POST['btnLogIn'])){
    if (!empty($_POST['emailLogIn']) and !empty($_POST['passwordLogIn'])){
        $email = $_POST['emailLogIn'];
        $password = $_POST['passwordLogIn'];
        $sql=$conn->query(" SELECT * FROM users where email='$email' and password='$password' ");
        if ($data=$sql->fetch_object()) {
            $_SESSION["id"]=$datos->id;
            $_SESSION["name"]=$datos->name;
            header("Location:../sources/main.php");
        } else {
            echo "<div class='alert alert-danger text-center mb-0'>No User Found</div>";
        }
        
    } else{
        echo "<div class='alert alert-danger text-center mb-0'>Fill the Form</div>";
    }
}

?>