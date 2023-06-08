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
  <title>Main</title>
</head>

<body>
  <header>
    <nav class="navbar bg-body-tertiary">
      <div class="container-fluid align-items-center">
        <img src="../assets/devchallenges.svg" />
        <ul class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
            <?php
              echo $_SESSION['name'];
            ?>
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">My Profile</a></li>
            <li><a class="dropdown-item" href="#">Group Chat</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="../controller/controllerLogOut.php">Logout</a></li>
          </ul>
        </ul>
      </div>
    </nav>
  </header>
  <main>
    <h1 class="text-center">Personal Info</h1>
    <p class="text-center">Basic info, like you name and photo</p>
  </main>
<body>