<?php

  session_start();
  include 'db_connect.inc.php';

  if(isset($_POST['submit'])){

    #Login with email adddress and newly created password.

    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);

    #Query the database to check login details
    $sql = "SELECT * FROM new_user WHERE email='$email' AND password='$password'";
    $resultCheck = mysqli_query($connection, $sql);


    #If the database returns 1 then same the email as a session
    #Direct user to dashboard if successful otherwise display error messages
    if(mysqli_num_rows($resultCheck) == 1){
      $_SESSION['email'] = $_POST['email'];
      $_SESSION['username'] = $_POST['username'];
      header("Location: ../index.php");

    }else{

      echo "<script>alert('Email or Pasword is invalid!')</script>";
      echo "<script>window.open('../sign-in.php','_self')</script>";
    }


  }
