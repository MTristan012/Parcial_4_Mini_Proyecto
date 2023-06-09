<?php
if (!empty($_POST['btnChangeDataSave'])){
    if (!empty($_POST['changeDataName']) and !empty($_POST['changeDataBio']) and !empty($_POST['changeDataPhone']) and !empty($_POST['changeDataEmail']) and !empty($_POST['changeDataPassword']) and !empty($_POST['changeImg'])){
        $name = $_POST['changeDataName'];
        $bio = $_POST['changeDataBio'];
        $phone = $_POST['changeDataPhone'];
        $email = $_POST['changeDataEmail'];
        $password = $_POST['changeDataPassword'];
        $img = $_POST['changeImg'];
        $imgCheck = strtolower(pathinfo($img,PATHINFO_EXTENSION));
        if ($imgCheck != "png"){
            echo "<div class='alert alert-danger text-center mb-3'>Sorry, only PNG files are allowed.</div>";
        }else{
            $sql = "UPDATE users SET name = '$name', bio = '$bio', phone = '$phone', email = '$email', password = '$password', img = '$img' WHERE id = {$_SESSION['id']}";
            if (mysqli_query($conn, $sql)) {
                header("Location:../sources/main.php");
            } else {
                echo "Error al insertar el registro: " . mysqli_error($conn);
            }
        }
    } else{
        echo "<div class='alert alert-danger text-center mb-3'>Fill the Form</div>";
    }
}

?>