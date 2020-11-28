<?php
include "../includes/db.php";

if (isset($_POST['submit'])) {

	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$role = $_POST['role'];
	$image = "users/profile_pics/deafaults/head_".rand(1,3);
	$msg ="";
	$class = "alert alert-";
	if(empty($username)){
		$msg = "<p>Username is required";
		echo "<div class='$class-danger'>$msg</div>";
	}
else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
		$msg = "<p>email is invalid</p>";
		echo "<div class='$class-danger'>$msg</div>";
	}

	else{
		$password = md5($password);
		$query = mysqli_query($connection, "INSERT INTO user(U_username,U_email,U_password,U_profile_pic,U_role) VALUES('$username','$email','$password','$image','$role')");
		if($query){
			header("Location: user.php");
		}
	}
}

