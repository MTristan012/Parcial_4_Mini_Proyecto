<?php

if (!empty($_POST['btnRegister'])){
    if (empty($_POST['registerName']) and empty($_POST['registerBio']) and empty($_POST['registerPhone']) and empty($_POST['registerEmail']) and empty($_POST['registerPassword'])){
        $name = $_POST['registerName'];
        $bio = $_POST['registerBio'];
        $phone = $_POST['registerPhone'];
        $email = $_POST['registerEmail'];
        $password = $_POST['registerPassword'];
        
        $sql = "INSERT INTO users (name, bio, phone, email, password) VALUES ('$name', '$bio', '$phone', '$email', '$password')";
        if (mysqli_query($conn, $sql)) {
            echo "Registro insertado correctamente.";
        } else {
            echo "Error al insertar el registro: " . mysqli_error($conn);
        }
        
    } else{
        echo "<div class='alert alert-danger text-center mb-0'>Fill the Form</div>";
    }
}

?>