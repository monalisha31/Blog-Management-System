
<?php ob_start(); ?>
<?php session_start(); ?>
<?php include "db.php"; ?>
<?php include "functions.php"; ?>
<?php (isset($_SESSION['userLogged'])) ? $user = $_SESSION['userLogged'] : header("Location: ../login.php");
$sql = mysqli_query($connection, "SELECT * FROM user WHERE U_email='$user'");
$row = mysqli_fetch_array($sql);
$username = $row['U_username'];
$profile = $row['U_profile_pic'];
$role = $row['U_role'];

if (isset($_GET['logout'])) {

  unset($_SESSION['userLogged']);
  header("Location: index.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <script src="https://cdn.ckeditor.com/4.5.6/standard/ckeditor.js"></script> 

</head>