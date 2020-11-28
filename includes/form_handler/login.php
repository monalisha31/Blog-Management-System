<?php
session_start();
$mysqli = new mysqli("localhost","u625807408_arcadian","Carpediem31","u625807408_db_contact") or die("Could not connect");

if(isset($_POST['login_submit'])) {
  $email = $_POST['email'];
  $pwd = $_POST['pwd'];

  $sql = mysqli_query($mysqli, "SELECT * FROM user WHERE U_email='$email'");
  $row = mysqli_fetch_assoc($sql);
  $db_email = $row['U_email'];
  $db_pwd = $row['U_password'];
  $profile_pic = $row['U_profile_pic'];
  $username = $row['U_username'];

  $rehashpwd = md5($pwd);

  if($email === $db_email && $db_pwd === $rehashpwd) {
    $_SESSION['userLogged'] = $email;
    $_SESSION['profile_pic'] = $profile_pic;
    $_SESSION['username'] = $username;
    header("Location: ../../dashboard_admin");
  }else{
    $_SESSION['log_email'] = $email;
    header("Location: ../../login.php?wrong_entries");
    
  }
}
