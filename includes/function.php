<?php
 include "db.php";
   error_reporting(E_ALL);
ini_set('display_errors', 1);

 function show_cat(){
   global $connection;

   $query = "SELECT * FROM category";
   $result = mysqli_query($connection, $query);
   while($row = mysqli_fetch_array($result)){
     $cat_id = $row['C_id'];
     $cat_title = $row['C_title'];
     echo "<li><a href='category.php?cat_id=$cat_id'>{$cat_title}</a></li>";
   }
 }
  function show_lang(){
   global $connection;

   $query = "SELECT * FROM language";
   $result = mysqli_query($connection, $query);
   while($row = mysqli_fetch_array($result)){
     $lang_id = $row['L_id'];
     $lang_title = $row['L_title'];
     echo "<li><a href='language.php?lang_id=$lang_id'>{$lang_title}</a></li>";
   }
 }
 





 ?>