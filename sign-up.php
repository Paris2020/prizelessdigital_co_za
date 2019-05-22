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
  <link rel="stylesheet" href="themes/prizelessdigital/css/styles.css">
</head>
<body>


<!-- Signup Form -->

<div class="container-fluid padding">
  <div class="row content-center padding">

    <img src="themes/prizelessdigital/images/logo.jpg"/>
    <form action="includes/signup.inc.php" method="POST">
      <input type="text" name="username" class="form-control" placeholder="Enter username"><br>
      <input type="email" name="email" class="form-control" placeholder="Enter email address"><br>
      <input type="text" name="phonenum" class="form-control" placeholder="Enter phone number"><br>
      <input type="password" name="password" class="form-control" placeholder="Enter password"><br>
      <input type="password" name="confirmpassword" class="form-control" placeholder="Confirm password"><br>
      <input type="submit" name="submit" value="Sign Up" class="btn btn-primary"><br>
      <a href="sign-in.php" class="btn btn-danger">Cancel</a>
    </form>

  </div>
</div>



<!-- Javascript files -->
<script src="bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
</body>
</html>
