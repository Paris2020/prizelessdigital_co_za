<?php

  session_start();
  include './../../includes/db_connect.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Sign up and login form.">
  <meta name="author" content="Nelly Moseki, Junior Frontend Developer">
  <title>Prizeless Digital Assessment</title>
  <link rel="stylesheet" href="themes/prizelessdigital/src/css/bootstrap-4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="themes/pricelessdigital/styles.css">
</head>
<body class="grid">


  <header class="header">
    <div class="inner">
      <div class="img-wrapper">
        <img src="themes/prizelessdigital/src/images/logo.jpg"/>
      </div>
    </div>
  </header>

  <!-- Signin Form -->
  <main class="main container">
    <div class="content-center">

      <div class="form-wrapper">
        <div class="form-header">
          <h3>Signup</h3>
          <p>Be a part of our company database...</p>
        </div>
        <div class="form-body">
          <form action="./../../includes/signin.inc.php" method="POST">

            <input type="email" name="email" class="form-control" placeholder="Enter email address"><br>
            <input type="password" name="password" class="form-control" placeholder="Enter password"><br>
            <input type="submit" name="submit" value="Sign In" class="btn btn-primary"><br><br>
            <span>OR</span><br><br>
            <a href="index.php" class="link">Signup if you don't have an account</a>
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
  <script src="themes/prizelessdigital/src/js/bootstrap-4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
