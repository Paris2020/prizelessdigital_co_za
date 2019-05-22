<?php

  session_start();
  include 'includes/db_connect.inc.php';

  $username = $_SESSION['username'];
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
  <link rel="stylesheet" href="themes/prizelessdigital/css/style.css">
</head>


<body>
<!-- Dashboard -->



<div class="container-fluid padding">
  <div class="row text-center">
    <div class="col-12">
      <h1><?php echo $username; ?></h1>
      <h1>Welcome to Prizeless Digital</h1>
    </div>
  </div>
</div>


<div class="container-fluid padding">
  <div class="row text-center padding">

    <img src="themes/prizelessdigital/images/logo.jpg">
    <div class="col-sm-4">
        <div class="card">
          <img src="themes/prizelessdigital/images/construction-project-management1.jpg">
          <div class="card-body">
            <h5 class="card-title">Service 1</h5>
            <p class="card-text text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin lacinia ut nisi ac sagittis.</p>
            <a href="#" class="btn btn-primary btn-lg">Read more</a>
          </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card">
          <img src="themes/prizelessdigital/images/04-as_medical_equipment_683-ab.jpg">
          <div class="card-body">
            <h5 class="card-title">Service 2</h5>
            <p class="card-text text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin lacinia ut nisi ac sagittis.</p>
            <a href="#" class="btn btn-primary btn-lg">Read more</a>
          </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card">
          <img src="themes/prizelessdigital/images/small_business.jpg">
          <div class="card-body">
            <h5 class="card-title">Service 3</h5>
            <p class="card-text text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin lacinia ut nisi ac sagittis.</p>
            <a href="#" class="btn btn-primary btn-lg">Read more</a>
          </div>
        </div>
    </div>

  </div>
</div>

<!-- Javascript files -->
<script src="bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
</body>
</html>
