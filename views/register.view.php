<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
  <title>Register</title>
</head>

<body>
    <header>
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid align-items-center">
            <img src="../assets/devchallenges.svg" />
            </div>
        </nav>
    </header>
    <main class="container mt-5">

        <h2>Register your Info</h2>
        <p>Changes will be reflected to every services</p>
        <?php 
            include "../model/conexion.php";
            include "../controller/controllerRegister.php"; 
        ?>

        <form action="" method="post">

            <div class="mb-3">
                <p class="mb-0">Name</p>
                <input type="name" class="form-control py-2" placeholder="Enter your name..." name="registerName">
            </div>

            <div class="mb-3">
                <p class="mb-0">Bio</p>
                <input type="textarea" class="form-control py-5 text-start text-break" placeholder="Enter your bio..." name="registerBio">
            </div>

            <div class="mb-3">
                <p class="mb-0">Phone</p>
                <input type="phone" class="form-control py-2" placeholder="Enter your phone..." name="registerPhone">
            </div>

            <div class="mb-3">
                <p class="mb-0">Email</p>
                <input type="email" class="form-control py-2" placeholder="Enter your email" name="registerEmail">
            </div>

            <div class="mb-3">
                <p class="mb-0">Password</p>
                <input type="password" class="form-control py-2" placeholder="Enter your password..." name="registerPassword">
            </div>

            <input class="btn btn-primary mt-3" type="submit" name="btnRegister" value="Save"/>

        </form>
    </main>
</body>