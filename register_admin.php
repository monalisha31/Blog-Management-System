


<?php
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
                <h1 class="display-1 display-1--with-line-sep">Register</h1>
                <p class="lead">Welcome to Arcadian. Start your reading journey with us.</p>
                
            </div>
        </div>
        <div class="row entries-wrap add-top-padding wide">
                <form action="includes/form_handler/create.php" method="post" role="form" class="form" autocomplete="off">

  <div class="form-group">
    <label>Username</label>
    <input type="text" name="username" placeholder="Username" class="full-width" class="form-control">
  </div>
  <div class="form-group">
    <label>Email</label>
    <input type="email" name="email" placeholder="E-Mail" class="full-width" class="form-control">
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="password" name="pwd" placeholder="Password" class="full-width" placeholder="Password" class="form-control">
    Suggested Passwords:<br>
    <i><?php echo uniqid(); ?></i>
    <br>
    <i><?php echo uniqid(); ?></i>
  </div>
  <div class="form-group">
    <input type="submit" name="create_submit" value="Continue" class="submit btn btn--primary btn--large full-width">
  </div>
</form>


            </div> <!-- s-content__main -->
        </div> <!-- end row -->

    </section>
   
 
        <?php

include 'includes/footer.php';
include 'includes/scripts.php';

?>
      

</body>

</html>