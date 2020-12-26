<?php session_start(); ?>
<?php include "db.php"; ?>
<?php include "classes/comment.php";?>
<?php include "function.php"; ?>
<?php $comment_obj = new Comment($connection); ?>


<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-P6RDQEZYWT"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-P6RDQEZYWT');
</script> 
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
    <script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/7fa8ea79b11c3c29fd14ada8a/ae0086848dfbe756f4726c3f6.js");</script>
    
</head>