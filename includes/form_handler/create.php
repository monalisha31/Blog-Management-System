<?php
  $mysqli = new mysqli("localhost","u625807408_arcadian","Carpediem31","u625807408_db_contact") or die("Could not connect");
  $error = [];
  if(isset($_POST['create_submit'])) {
    $username = clean($_POST['username']);
    $email = clean($_POST['email']);
    $pwd = $_POST['pwd'];
    $blog = $_POST['blog'];
    $blog_url = $_POST['blog_url'];
    $review_url = $_POST['review_url'];
    $introduction = $_POST['intro'];
    $instagram = $_POST['insta'];
    $facebook = $_POST['facebook'];
    $twitter = $_POST['twitter'];
    $youtube = $_POST['youtube'];
    $goodreads = $_POST['goodread'];
    $followers = $_POST['followers'];
    $interview = $_POST['author_inter'];
    $role = $_POST['role'];

    if(empty($username)) {
      array_push($error, "<p class='alert alert-danger'>Username is required</p>");
      header("Location: ../../login.php?error=Username_is_required");
    }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      array_push($error, "<p class='alert alert-danger'>Email is invalid</p>");
      header("Location: ../../login.php?error=Email_is_invalid");
    }elseif (empty($email)) {
      array_push($error, "<p class='alert alert-danger'>Email is required</p>");
      header("Location: ../../login.php?error=Email_is_required");
    }elseif (strlen($pwd) <= 5) {
      array_push($error, "<p class='alert alert-danger'>Password is short</p>");
      header("Location: ../../login.php?error=password_is_short");
    }
    else{
      if(empty($error)) {
        $rand = rand(1,3);
        switch ($rand) {
          case "1":
            $profile_pic = "users/profile_pics/defaults/head_1.png";
            break;
          case "2":
            $profile_pic = "users/profile_pics/defaults/head_2.png";
            break;
          case "3":
            $profile_pic = "users/profile_pics/defaults/head_3.png";
            break;
        }
        $hashedPwd = md5($pwd);
        $sql = mysqli_query($mysqli, "INSERT INTO user VALUES(NULL,'$username','$email','$hashedPwd','$profile_pic','yes','0','$role','$blog','$blog_url','$review_url','$introduction','$followers','$interview','$instagram','$facebook','$youtube','$goodreads','$twitter','Not Verfied' )");
        header("Location: ../../thank.php");
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
