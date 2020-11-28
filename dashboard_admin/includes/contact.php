<?php
  $mysqli = new mysqli("localhost","u625807408_arcadian","Carpediem31","u625807408_db_contact") or die("Could not connect");
  $error = [];
  if(isset($_POST['contact_submit'])) {

    $name = $_POST['cName'];
    $email = $_POST['cEmail'];
    $message = $_POST['cMessage'];
  

    if(empty($name)) {
      array_push($error, "<p class='alert alert-danger'>Name is required</p>");
      header("Location: ../suggest.php?error=Name_is_required");
    }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      array_push($error, "<p class='alert alert-danger'>Email is invalid</p>");
      header("Location: ../suggest.php?error=Email_is_invalid");
    }elseif (empty($email)) {
      array_push($error, "<p class='alert alert-danger'>Email is required</p>");
      header("Location: ../suggest.php?error=Email_is_required");
    }
    else{
      if(empty($error)) {
        
        $sql = mysqli_query($mysqli, "INSERT INTO contact VALUES(NULL,'$name','$email','$message' )");
        header("Location: ../index.php");
      }
    }
  }

