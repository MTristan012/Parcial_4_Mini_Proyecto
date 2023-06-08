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
  <header class="ms-0 ps-0 pt-0 pe-5">
    <nav class="navbar bg-body-tertiary">
      <div class="container-fluid align-items-center">
        <img src="../assets/devchallenges.svg" />
        <ul class="nav-item dropdown pe-2">
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
    <section>
      <div>
        <h1 class="text-center">Personal Info</h1>
        <p class="text-center">Basic info, like you name and photo</p>
      </div>
    </section>
    

    <section class="container mt-5">
      <div class="card">
        <ul class="list-group list-group-flush">
          <li class="list-group-item d-flex justify-content-between">
            <div>
              <h4>Profile</h4>
              <p>Some info may be visible to other people</p>
            </div>
            <div class="d-flex align-items-center">
              <button type="button" class="btn btn-outline-secondary me-2">Edit</button>
            </div>
          </li>
          <li class="list-group-item">
            <span>PHOTO</span>
          </li>
          <li class="list-group-item d-flex justify-content-between">
            <span class="text-body-secondary  ms-3">
              NAME
            </span>
            <span>
              <?php
                echo $_SESSION['name'];
              ?>
            </span>
          </li>
          <li class="list-group-item d-flex justify-content-between">
            <span class="text-body-secondary  ms-3">
              BIO
            </span>
            <span>
              <?php
                echo $_SESSION['bio'];
              ?>
            </span>
          </li>
          <li class="list-group-item d-flex justify-content-between">
            <span class="text-body-secondary  ms-3">
              PHONE
            </span>
            <span>
              <?php
                echo $_SESSION['phone'];
              ?>
            </span>
          </li>
          <li class="list-group-item d-flex justify-content-between">
            <span class="text-body-secondary  ms-3">
              EMAIL
            </span>
            <span>
              <?php
                echo $_SESSION['email'];
              ?>
            </span>
          </li>
        </ul>
        <div class="card-footer d-flex justify-content-between">
          <span class="text-body-secondary ms-3">
            PASSWORD
          </span>
          <span>
              <?php
                $safePassword = strlen($_SESSION['password']);
                echo str_repeat("*", $safePassword);
              ?>
            </span>
        </div>
      </div>
      <div class="d-flex justify-content-between">
        <p>Created by <span><a href="https://github.com/MTristan012">MTristan012</a></span></p>
        <p>devChallenges</p>
      </div>
    </section>
  </main>
<body>