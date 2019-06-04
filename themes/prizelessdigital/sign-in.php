<?php

  session_start();
  include 'includes/db_connect.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Sign up and login form.">
  <meta name="author" content="Nelly Moseki, Junior Frontend Developer">
  <title>Prizeless Digital</title>
  <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="themes/pricelessdigital/css/style.css">
</head>
<body class="grid">

<!-- Signin Form -->

<div class="container">
  <div class="row justify-content-center">
    <img src="themes/prizelessdigital/images/logo.jpg"/>
    <form action="includes/signin.inc.php" method="POST">

      <input type="email" name="email" class="form-control" placeholder="Enter email address"><br>
      <input type="password" name="password" class="form-control" placeholder="Enter password"><br>
      <input type="submit" name="submit" value="Sign In" class="btn btn-primary"><br><br>
      <span>OR</span><br><br>
      <a href="sign-up.php" class="link">Signup if you don't have an account</a>
    </form>
  </div>
</div>


<!-- Javascript files -->
<script src="bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
</body>
</html>