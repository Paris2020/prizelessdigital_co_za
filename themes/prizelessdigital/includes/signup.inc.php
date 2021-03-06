<?php

  session_start();
  include (dirname(__FILE__) . '/includes/db_connect.inc.php');

  if(isset($_POST['submit'])){


    #Fetch data entered in the form and submit to the the database.

    $username = mysqli_real_escape_string($connection, $_POST['username']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $phonenum = mysqli_real_escape_string($connection, $_POST['phonenum']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);
    $confirmpass = mysqli_real_escape_string($connection, $_POST['confirmpassword']);


    #Check if any field is left empty
    if(empty($username) || empty($email) || empty($phonenum) || empty($password) || empty($confirmpass)){
      #Return the user to the form
      header("Location: ../index.php?EMPTY=FIELDS=DETECTED");
      exit();

    }else{
      #Let's make sure the user has entered a valid email address

      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Invalid email address entry')</script>";
        echo "<script>window.open('../index.php','_self')</script>";
      }else{
        #Let's make sure that the email address doesn't already exist in the database

        $sql = "SELECT * FROM new_user WHERE email= '$email'";
        $emailCheck = mysqli_query($connection, $sql);
        $db_result = mysqli_num_rows($emailCheck);
      }
      if($password != $confirmpass){
        #If the passwords are not the same return the user to the form
        #Display and error message

        header("Location: ../index.php");
        exit();

      }else{
        #Insert the data into the dataabase

        $sql = "INSERT INTO new_user (username, email, phonenum, password, confirmpassword)
                VALUES ('$username','$email','$phonenum','$password','$confirmpass')";

        mysqli_query($connection, $sql);
        header("Location: themes/prizelessdigital/sign-in.php");
      }
    }


  }
