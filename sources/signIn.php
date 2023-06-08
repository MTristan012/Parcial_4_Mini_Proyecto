<?php
    /*session_start();
    if (isset($_SESSION['email'])){
        header('Location:main.php');
    }
    if ($_SERVER['REQUEST_METHOD']=='POST'){
        $email = filter_var(strtolower($_POST['email']));
        $password = strtolower($_POST['password']);
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $error = "";
        if (empty($email) or empty($password)){
            $error.= '<div clas="alert alert-primary" role="alert">Fill all Requieres</div>';
        } else {
            try {
                $conexion = new PDO('mysql:host=localhost;dbname=miniproyecto', 'root', '');
            } catch (PDOException $e) {
                echo "Error:" . $e->getMessage();
            }
            $stateman = $conexion->prepare("SELECT * FROM users WHERE email= :email LIMIT 1");
            $stateman->execute(array(':email'=> $email));
            $result = $stateman->fetch();
            if ($result != false){
                $error .= '<div clas="alert alert-primary" role="alert">Register Complete</div>';
            }if ($error == ''){
                $stateman = $conexion->prepare('INSERT INTO users(id, name, email, phone, password) VALUES ( NULL, :name, :phone, :password)');
                $stateman->execute(array(':name' => $name , ':email' => $email , ':phone' => $phone , ':password' => $password));
                
                header('Location:main.php');
            }
        }
    }*/

    require '../views/signIn.view.php'
?>