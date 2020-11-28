<?php

$db_host = "localhost";
$db_user = "u625807408_arcadian";
$db_pass = "Carpediem31";
$db_name = "u625807408_db_contact";

$connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (!$connection) {
  die("Could'nt connect to the database " . mysqli_error($connection));
}
