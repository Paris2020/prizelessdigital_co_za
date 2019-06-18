<?php

  session_start();
  dirname(__FILE__ . 'includes/db_connect.inc.php');

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

    <main class="main container-fluid">
      <!-- Dashboard -->
      <div class="row text-center">
        <div class="col-12">
          <h1>Welcome to Prizeless Digital</h1>
          <h1><?php echo $username; ?></h1>
        </div>
      </div>

      <div class="container-fluid">
        <div class="row text-center">

          <div class="col-sm-4">
              <div class="card">
                <div class="img-wrapper">
                  <img src="src/images/construction-project-management1.jpg"/>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Service 1</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin lacinia ut nisi ac sagittis.</p>
                  <a href="#" class="btn btn-large">Read more</a>
                </div>
              </div>
          </div>
          <div class="col-sm-4">
              <div class="card">
                <div class="img-wrapper">
                  <img src="src/images/04-as_medical_equipment_683-ab.jpg"/>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Service 2</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin lacinia ut nisi ac sagittis.</p>
                  <a href="#" class="btn btn-large">Read more</a>
                </div>
              </div>
          </div>
          <div class="col-sm-4">
              <div class="card">
                <div class="img-wrapper">
                  <img src="src/images/small_business.jpg"/>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Service 3</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin lacinia ut nisi ac sagittis.</p>
                  <a href="#" class="btn btn-large">Read more</a>
                </div>
              </div>
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
