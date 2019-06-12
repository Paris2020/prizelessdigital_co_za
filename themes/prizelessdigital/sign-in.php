<?php

  session_start();
  dirname(__FILE__ . 'includes/db_connect.inc.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Sign up and login form.">
  <meta name="author" content="Nelly Moseki, Junior Frontend Developer">
  <title>Prizeless Digital Assessment</title>
  <link rel="stylesheet" href="@fortawesome/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="src/css/bootstrap-4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="styles.css">
</head>
<body class="grid">


  <header class="header">
    <div class="inner">
      <div class="img-wrapper">
        <img src="src/images/logo.jpg"/>
      </div>
    </div>
  </header>

  <!-- Signin Form -->
  <main class="main container">
    <div class="content-center">

      <div class="form-wrapper signin">
        <div class="form-header">
          <h2>Signin</h2>
          <p>See whats going at Prizeless Digital</p>
          <i class="fal fa-pencil"></i>
        </div>
        <div class="form-body">
          <form id="signin" action="includes/signin.inc.php" method="POST">

            <div class="input-wrapper">
              <label>Username</label>
              <input type="email" name="email" class="form-control">
            </div>

            <div class="input-wrapper">
              <label>Password</label>
              <input type="password" name="password" class="form-control">
            </div>


            <div class="btn-wrapper">
              <input type="submit" name="submit" value="Sign In" class="btn btn-primary">
              <span>OR</span>
              <a href="index.php" class="link">Signup if you don't have an account</a>
            </div>

          </form>
        </div>
      </div>

    </div>
  </main>

  <footer class="footer">
    <div class="inner">

    </div>
  </footer>

  <!-- Javascript files -->
  <script src="src/js/bootstrap-4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
