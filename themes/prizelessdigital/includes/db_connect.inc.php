<?php

  #Assign server information to connect to the database
  $serverName = "localhost";
  $userName = "root";
  $password = "root";
  $dbName = "prizeless_db";


  #Check to see if connection to the database was made otherwise stop attempt
  # and display errro message
  # Else run a db select function
  $connection = mysqli_connect($serverName, $userName, $password, $dbName);
  echo $connection;
  if(!$connection){
    die('Could not connect to database: ' . mysqli_error($connection));
  }else{
    //echo "<script>alert('Database connection was successful!!')</script>";
    $db_select = mysqli_select_db($connection, $dbName);

    if(!$db_select){
      die('Can\'t use ' . $dbName . ': ' . mysqli_error($connection));
    }
  }
