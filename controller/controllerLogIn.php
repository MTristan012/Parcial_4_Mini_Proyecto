<?php
session_start();
if (!empty($_POST['btnLogIn'])){
    if (!empty($_POST['emailLogIn']) and !empty($_POST['passwordLogIn'])){
        $email = $_POST['emailLogIn'];
        $password = $_POST['passwordLogIn'];
        $sql=$conn->query(" SELECT * FROM users where email='$email' and password='$password' ");
        if ($data=$sql->fetch_object()) {
            $_SESSION["id"]=$data->id;
            $_SESSION["name"]=$data->name;
            $_SESSION["bio"]=$data->bio;
            $_SESSION["phone"]=$data->phone;
            $_SESSION["email"]=$data->email;
            $_SESSION["password"]=$data->password;
            $_SESSION["img"]=$data->img;
            header("Location:../sources/main.php");
        } else {
            echo "<div class='alert alert-danger text-center mb-0'>No User Found</div>";
        }
        
    } else{
        echo "<div class='alert alert-danger text-center mb-0'>Fill the Form</div>";
    }
}

?>