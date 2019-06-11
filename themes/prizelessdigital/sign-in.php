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
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
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
          <h3>Signin</h3>
          <p>See whats going at Prizeless Digital</p>
        </div>
        <div class="form-body">
          <form action="./../../includes/signin.inc.php" method="POST">

            <input type="email" name="email" class="form-control">
            <input type="password" name="password" class="form-control">

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
  <script src="themes/prizelessdigital/src/js/bootstrap-4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
