<?php
if (!empty($_POST['btnChangeDataSave'])) {
    if (!empty($_POST['changeDataName']) && !empty($_POST['changeDataBio']) && !empty($_POST['changeDataPhone']) && !empty($_POST['changeDataEmail']) && !empty($_POST['changeDataPassword']) && !empty($_FILES['changeImg'])) {
        $name = $_POST['changeDataName'];
        $bio = $_POST['changeDataBio'];
        $phone = $_POST['changeDataPhone'];
        $email = $_POST['changeDataEmail'];
        $password = $_POST['changeDataPassword'];
        $img = $_FILES['changeImg']['tmp_name'];
        $imgName = $_FILES['changeImg']['name'];
        $imgCheck = strtolower(pathinfo($imgName, PATHINFO_EXTENSION));

        if ($imgCheck != "png") {
            echo "<div class='alert alert-danger text-center mb-3'>Sorry, only PNG files are allowed.</div>";
        } else {
            $targetDirectory = '../uploads/';
            $targetFilePath = $targetDirectory . $imgName;

            if (move_uploaded_file($img, $targetFilePath)) {
                $sql = "UPDATE users SET name = '$name', bio = '$bio', phone = '$phone', email = '$email', password = '$password', img = '$targetFilePath' WHERE id = {$_SESSION['id']}";
                if (mysqli_query($conn, $sql)) {
                    header("Location: ../sources/main.php");
                    exit;
                } else {
                    echo "Error al insertar el registro: " . mysqli_error($conn);
                }
            } else {
                echo "<div class='alert alert-danger text-center mb-3'>Failed to upload the image.</div>";
            }
        }
    } else {
        echo "<div class='alert alert-danger text-center mb-3'>Fill the Form</div>";
    }
}

?>