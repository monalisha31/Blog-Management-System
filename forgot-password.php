

<?php
$title = "Forgot Password";
include 'includes/header.php';
?>


<body id="top"> 
       <div id="preloader">
        <div id="loader" class="dots-fade">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

       <?php
include 'includes/navbar.php';
?>



 <section class="s-content s-content--top-padding">

  
        <div class="row">
            <div class="col-full s-content__main">
              <div class="row narrow">
            <div class="col-full s-content__header" data-aos="fade-up">
                <h1 class="display-1 display-1--with-line-sep">Change Password</h1>
               
                
            </div>
        </div>
        <div class="row entries-wrap add-top-padding wide">

<form method="post" role="form" class="form">
  
  <div class="form-group">
    <label>Email</label>
    <input type="email" name="email" class="full-width" placeholder="E-Mail" class="form-control">
  </div>
  <div class="form-group">
    <label>New Password</label>
    <input type="password" name="password"  class="full-width" placeholder="Password" class="form-control">
  </div>
  <div class="form-group">
    <input type="submit" name="submit" value="Login" class="submit btn btn--primary btn--large full-width">
  </div>
</form>
     <div align="center">
      <b><a href="forgot-password.php?step1=1">Forgot Password</a></b>
     </div>

            </div> <!-- s-content__main -->
        </div> <!-- end row -->

    </section>
   
 
        <?php

include 'includes/footer.php';
include 'includes/scripts.php';

?>

<?php
  global $connection;
if (isset($_POST['submit'])) {
  $pwd = $_POST['password'];
  $rehashpwd = md5($pwd);
  if(mysqli_query($connection, "UPDATE user SET U_password='$rehashpwd' WHERE U_email='$_POST[email]'")){
    ?>
    <script type="text/javascript">
      alert("password has been changed");
    </script>
    <?php
  }
}
?>
      

</body>

</html>