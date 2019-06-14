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
  <title>Prizeless Digital</title>
  <link rel="stylesheet" href="themes/prizelessdigital/src/css/bootstrap-4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="themes/prizelessdigital/styles.css">
</head>

<body class="grid">


  <header class="header">
    <div class="inner">
      <div class="img-wrapper">

      </div>
    </div>
  </header>

  <!-- Signup Form -->

  <main class="main container-fluid">
    <div class="content-center">

      <div class="form-wrapper signup">
        <div class="form-header">
          <h2>Signup</h2>
          <p>Be a part of our company database...</p>
          <i class="fas fa-pencil-alt"></i>
        </div>
        <div class="form-body">
            <form id="signup" action="includes/signup.inc.php" method="POST">

              <div class="input-wrapper">
                <label>Username</label>
                <input type="text" name="username" class="form-control"/>
              </div>

              <div class="input-wrapper">
                <label>Email Address</label>
                <input type="email" name="email" class="form-control"/>
              </div>

              <div class="input-wrapper">
                <label>Phone Number</label>
                <input type="text" name="phonenum" class="form-control"/>
              </div>

              <div class="input-wrapper">
                <label>Password</label>
                <input type="password" name="password" class="form-control"/>
              </div>

              <div class="input-wrapper">
                <label>Confirm Password</label>
                <input type="password" name="confirmpassword" class="form-control"/>
              </div>

              <div class="btn-wrapper">
                <a href="themes/prizelessdigital/sign-in.php" class="btn btn-danger">Cancel</a>
                <input type="submit" name="submit" value="Sign Up" class="btn btn-primary"/>
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
