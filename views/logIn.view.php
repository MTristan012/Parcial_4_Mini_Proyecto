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
  <title>Login</title>
</head>

<body>

  <div class="card container position-absolute top-50 start-50 translate-middle rounded-4" style="max-width: 22rem;">
    <div class="mt-3 ms-3">
      <img src="../assets/devchallenges.svg" alt="devchallenges" style="width: 9rem;">
    </div>

    <div class="card-body">
      <h5 class="card-title">Login</h5>
      <?php 
      include "../model/conexion.php";
      include "../controller/controllerLogIn.php"; 
      ?>
    </div>

    <div class="card-body">
      <form action="" method="post">
        <div class="input-group mb-3">
          <span class="input-group-text border-end-0">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill"
              viewBox="0 0 16 16">
              <path
                d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
            </svg>
          </span>
          <input type="email" class="form-control" aria-label="" placeholder="Email" id="email" name="emailLogIn">
        </div>

        <div class="input-group mb-3">
          <span class="input-group-text">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock-fill"
              viewBox="0 0 16 16">
              <path
                d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z" />
            </svg>
          </span>
          <input type="password" class="form-control" aria-label="" placeholder="Password" name="passwordLogIn">
        </div>

        <input class="btn btn-primary" type="submit" name="btnLogIn" value="Start coding now"/>
      </form>
    </div>

    <div class="text-center">
      <p>
        or continue with these social profile
      </p>
      <ul class="d-flex flex-wrap gap-4 p-0 justify-content-center" style="list-style: none">
        <li>
          <a href="https://www.google.com/">
            <img src="../assets/Google.svg" alt="Google">
          </a>
        </li>
        <li>
          <a href="https://www.facebook.com/">
            <img src="../assets/Facebook.svg" alt="Facebook">
          </a>
        </li>
        <li>
          <a href="https://twitter.com/home">
            <img src="../assets/Twitter.svg" alt="Twitter">
          </a>
        </li>
        <li>
          <a href="https://github.com/MTristan012">
            <img src="../assets/Gihub.svg" alt="GitHub">
          </a>
        </li>
      </ul>
      <p>
        Adready a member?
        <span>
          <a href="../sources/signIn.php" class="link-underline link-underline-opacity-0">Register</a>
        </span>
      </p>

    </div>

  </div>

</body>