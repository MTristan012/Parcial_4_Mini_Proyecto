<?php

if (!empty($_POST['btnSignIn'])){
    if (!empty($_POST['emailSignIn']) and !empty($_POST['passwordSignIn'])){
        $email = $_POST['emailSignIn'];
        $password = $_POST['passwordSignIn'];
        $sql=$conn->query(" SELECT * FROM users where email='$email' ");
        if ($data=$sql->fetch_object()) {
            echo "<div class='alert alert-danger text-center mb-0'>Email is Already Registered</div>";
        } else {
            header("Location:../sources/register.php");
        }
        
    } else{
        echo "<div class='alert alert-danger text-center mb-0'>Fill the Form</div>";
    }
}

?>