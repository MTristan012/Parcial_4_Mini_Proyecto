<?php

if (!empty($_POST['btnLogIn'])){
    if (!empty($_POST['emailLogIn']) and !empty($_POST['passwordLogIn'])){
        $email = $_POST['emailLogIn'];
        $password = $_POST['passwordLogIn'];
        $sql=$conn->query(" SELECT * FROM users where email='$email' and password='$password' ");
        if ($data=$sql->fetch_object()) {
            header("Location:../sources/main.php");
        } else {
            echo "<div class='alert alert-danger text-center mb-0'>No User Found</div>";
        }
        
    } else{
        echo "<p class='text-danger mb-0 text-center'>Fill the Form </p>";
    }
}

?>