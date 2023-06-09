<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

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
        <img src="../assets/devchallenges-light.svg" />
        <ul class="nav-item dropdown pe-2">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
            <?php
              if ($_SESSION['img'] == NULL) {
                echo '<img src="../assets/logIn.jpg" alt="NoPhoto" width = "25em" height = "25em" class="rounded">'. " " . $_SESSION['name'];
              } else {
                echo '<img src="' . $_SESSION['img'] . '" width = "25em" height = "25em" class="rounded" alt="UserPhoto"/>' . " " . $_SESSION['name'];
              }
            ?>
            <img src="" alt="" style=>
          </a>
          <ul class="dropdown-menu">
            <li class="d-flex align-items-center container">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
              </svg>
              <a class="dropdown-item" href="../sources/main.php">My Profile</a></li>
            <li class="d-flex align-items-center container">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
              </svg>
              <a class="dropdown-item" href="#">Group Chat</a></li>
            <li><hr class="dropdown-divider"></li>
            <li class="text-danger d-flex align-items-center container">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
                <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
              </svg>
              <a class="dropdown-item text-danger" href="../controller/controllerLogOut.php">Logout</a>
            </li>
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
              <a type="button" class="btn btn-outline-secondary me-2" href="../sources/changeData.php">Edit</a>
            </div>
          </li>
          <li class="list-group-item d-flex justify-content-between">
            <span class="text-body-secondary ms-3 text-center d-flex align-items-center">PHOTO</span>
            <span>
              <?php
                if ($_SESSION['img'] == NULL) {
                  echo '<img src="../assets/logIn.jpg" alt="NoPhoto" width = "70em" height = "70em" class="rounded">';
                } else {
                  echo '<img src="' . $_SESSION['img'] . '" width = "70em" height = "70em" class="rounded" alt="UserPhoto"/>';
                }
              ?>
            </span>
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
            <span class="text-body-secondary ms-3">
              BIO
            </span>
            <span>
              <?php
                echo $_SESSION['bio'];
              ?>
            </span>
          </li>
          <li class="list-group-item d-flex justify-content-between">
            <span class="text-body-secondary ms-3">
              PHONE
            </span>
            <span>
              <?php
                echo $_SESSION['phone'];
              ?>
            </span>
          </li>
          <li class="list-group-item d-flex justify-content-between">
            <span class="text-body-secondary ms-3">
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