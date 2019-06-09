<?php

  session_start();
  include '/themes/prizelessdigital/includes/db_connect.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Sign up and login form.">
  <meta name="author" content="Nelly Moseki, Junior Frontend Developer">
  <title>Prizeless Digital Assessment</title>
  <link rel="stylesheet" href="/themes/src/css/bootstrap-4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="/themes/pricelessdigital/style.css">
</head>
<body class="grid">

<!-- Signin Form -->

<div class="container">
  <div class="row justify-content-center">
    <img src="/themes/prizelessdigital/src/images/logo.jpg"/>
    <form action="/themes/pricelessdigital/includes/signin.inc.php" method="POST">

      <input type="email" name="email" class="form-control" placeholder="Enter email address"><br>
      <input type="password" name="password" class="form-control" placeholder="Enter password"><br>
      <input type="submit" name="submit" value="Sign In" class="btn btn-primary"><br><br>
      <span>OR</span><br><br>
      <a href="/themes/pricelessdigital/sign-up.php" class="link">Signup if you don't have an account</a>
    </form>
  </div>
</div>


<!-- Javascript files -->
<script src="/themes/src/js/bootstrap-4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
