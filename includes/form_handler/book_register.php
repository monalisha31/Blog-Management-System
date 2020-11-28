<?php
  $mysqli = new mysqli("localhost","u625807408_arcadian","Carpediem31","u625807408_db_contact") or die("Could not connect");
  $error = [];
  if(isset($_POST['book_submit'])) {
    $name = clean($_POST['name']);
    $author = $_POST['author'];
    $genre = $_POST['genre'];
   
    $synopsis = mysqli_real_escape_string($mysqli,$_POST['synopsis']);
    $website = $_POST['website'];
    $amazon = $_POST['amazon'];
    
    $introduction = mysqli_real_escape_string($mysqli,$_POST['intro']);
    $price = $_POST['price'];
   
    $interview = $_POST['author_inter'];
    $email = clean($_POST['email']);
   if (isset($_FILES['book_image'])) {
      $dir = "dashboard_admin/images/";
      $target_file = $dir.basename($_FILES['book_image']['name']);
      if (move_uploaded_file($_FILES['book_image']['tmp_name'],$target_file)) {
        echo "Image was uploaded";
      }else{
        echo "Something went wrong while uploading image";
      }
    }
  

    if(empty($name)) {
      array_push($error, "<p class='alert alert-danger'>Book name is required</p>");
      header("Location: ../login.php?error=Username_is_required");
    }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      array_push($error, "<p class='alert alert-danger'>Email is invalid</p>");
      header("Location: ../login.php?error=Email_is_invalid");
    }elseif (empty($email)) {
      array_push($error, "<p class='alert alert-danger'>Email is required</p>");
      header("Location: ../login.php?error=Email_is_required");
    }
    else{
      if(empty($error)) {
 
    $sql = mysqli_query($mysqli, "INSERT INTO book VALUES(NULL,'$name','$author','$genre','$synopsis','$website','$amazon','$introduction','$target_file','$interview','$email','$price' )");
        header("Location: ../../submit_1.php");
      }
    }
  }
  function clean($data) {
    global $mysqli;
    $data = htmlspecialchars($data);
    $data = mysqli_real_escape_string($mysqli, $data);
    $data = stripslashes($data);
    $data = strip_tags($data);
    return $data;
  }
