<?php session_start(); ?>
<?php include "db.php"; ?>
<?php include "classes/comment.php";?>
<?php include "function.php"; ?>
<?php $comment_obj = new Comment($connection); ?>


<!DOCTYPE html>
<html class="no-js" lang="en">
<head> 
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
    <meta name="description" content="A global community of readers and authors from all around the world. Every language of books are appreciated and are given a honest review. Our aim is to appreciate literature and help authors and poets to find there targeted audience.">
    <meta name="author" content="The Arcadian">
    <link rel="shortcut icon" href="/images/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/main.css">
     <link href='https://fonts.googleapis.com/css?family=Yellowtail' rel='stylesheet'>
    <script src="js/modernizr.js"></script>
    
</head>