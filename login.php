

<?php
$title = "Login";
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
                <h1 class="display-1 display-1--with-line-sep">Login</h1>
                <p class="lead">Welcome back to Arcadian.If this is your first experience with us, then please register <a href="register_1.php">here</a></p>
                
            </div>
        </div>
        <div class="row entries-wrap add-top-padding wide">

<form action="includes/form_handler/login.php" method="post" role="form" class="form">
  
  <div class="form-group">
    <label>Email</label>
    <input type="email" name="email" class="full-width" placeholder="E-Mail" class="form-control">
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="password" name="pwd"  class="full-width" placeholder="Password" class="form-control">
  </div>
  <div class="form-group">
    <input type="submit" name="login_submit" value="Login" class="submit btn btn--primary btn--large full-width">
  </div>
</form>
     <div align="center">
      <b><a href="forgot-password.php">Forgot Password</a></b>
     </div>

            </div> <!-- s-content__main -->
        </div> <!-- end row -->

    </section>
   
 
        <?php

include 'includes/footer.php';
include 'includes/scripts.php';

?>
      

</body>

</html>