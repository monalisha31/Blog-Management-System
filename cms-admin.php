<?php
  include 'includes/header.php';
  $query = mysqli_query($connection, "SELECT * FROM user");
  if(mysqli_num_rows($query) === 0) {
     include 'register_admin.php';
   }else{
    include 'login.php';
  }
