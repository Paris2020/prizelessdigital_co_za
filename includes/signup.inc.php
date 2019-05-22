<?php

  session_start();
  include 'db_connect.inc.php';

  if(isset($_POST['submit'])){

    #Fetch data entered in the form and submit to the the database.

    $username = mysql_escape_string($_POST['username']);
    $email = mysql_escape_string($_POST['email']);
    $phonenum = mysql_escape_string($_POST['phonenum']);
    $password = mysql_escape_string($_POST['password']);
    $confirmpass = mysql_escape_string($_POST['confirmpassword']);



    #Check if any field is left empty
    if(empty($username) || empty($email) || empty($phonenum) || empty($password) || empty($confirmpass)){
      #Return the user to the form
      header("Location: ../sign-up.php?EMPTY=FIELDS=DETECTED");
      exit();

    }else{
      #Let's make sure the user has entered a valid email address

      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Invalid email address entry')</script>";
        echo "<script>window.open('../sign-up.php','_self')</script>";
      }else{
        #Let's make sure that the email address doesn't already exist in the database

        $sql = "SELECT * FROM new_user WHERE email= '$email'";
        $emailCheck = mysql_query($connection, $sql);
        $db_result = mysql_num_rows($emailCheck);
      }
      if($password != $confirmpass){
        #If the passwords are not the same return the user to the form
        #Display and error message

        header("Location: ../sign-up.php");
        exit();

      }else{
        #Insert the data into the dataabase

        $sql = "INSERT INT0 new_user (username, email, phonemum, password, confirmpassword)
                VALUES ('$username','$email','$phonenum','$password','$confirmpass')";
        mysql_query($connection, $sql);
        header("Location: ../sign-in.php");
      }
    }


  }
