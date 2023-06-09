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
  <title>Change Data</title>
</head>

<body>
  <header class="ms-0 ps-0 pt-0 pe-5">
    <nav class="navbar bg-body-tertiary">
      <div class="container-fluid align-items-center">
        <img src="../assets/devchallenges-light.svg" />
        <ul class="nav-item dropdown pe-2">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
            <?php
              echo '<img src = "data:image/png;base64,' . base64_encode($_SESSION['img']) . '" width = "20em" height = "20em" class="rounded"/>' . " " . $_SESSION['name'];
            ?>
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
    <section class="container">
      <a class="btn btn-outline-info mt-3 border-0" type="submit" name="btnBackChangeData" href="../sources/main.php">
        &lt; Back
      </a>
    </section>
    

    <section class="container mt-5 card py-4">
      <h2 class="ms-3">Change Info</h2>
      <p class="ms-3">Changes will be reflected to every services</p>
      <?php 
          include "../model/conexion.php";
          include "../controller/controllerChangeData.php"; 
      ?>

      <div class="container pe-5">
        <form action="" method="post" class="pe-5" enctype="multipart/form-data">

          <div class="mb-3 d-flex">
            <span class="me-4 d-flex align-items-center mb-0">
              <?php
                echo '<img src = "data:image/png;base64,' . base64_encode($_SESSION['img']) . '" width = "60em" height = "60em" class="rounded"/>';
              ?>
            </span>
            <span>
              <label for="formFile" class="form-label">CHANGE PHOTO</label>
              <input class="form-control" type="file" name="changeImg" accept="image/png">
            </span>
          </div>

          <div class="mb-3">
              <p class="mb-0">Name</p>
              <input type="name" class="form-control py-2" placeholder="Enter your name..." name="changeDataName">
          </div>

          <div class="mb-3">
              <p class="mb-0">Bio</p>
              <input type="textarea" class="form-control py-5 text-start text-break" placeholder="Enter your bio..." name="changeDataBio">
          </div>

          <div class="mb-3">
              <p class="mb-0">Phone</p>
              <input type="phone" class="form-control py-2" placeholder="Enter your phone..." name="changeDataPhone">
          </div>

          <div class="mb-3">
              <p class="mb-0">Email</p>
              <input type="email" class="form-control py-2" placeholder="Enter your email" name="changeDataEmail">
          </div>

          <div class="mb-3">
              <p class="mb-0">Password</p>
              <input type="password" class="form-control py-2" placeholder="Enter your password..." name="changeDataPassword">
          </div>

          <input class="btn btn-primary mt-3" type="submit" name="btnChangeDataSave" value="Save"/>

        </form>
      </div>
    </section>
  </main>
<body>