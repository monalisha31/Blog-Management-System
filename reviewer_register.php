


<?php
$title = "Register";
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
                <p class="lead">Submit the following form with correct details. We will review your application and will get back to you within the next 24 hours. Read the <a href = "r_guidelines.php"> reviewer's guidelines</a> for more details.</p>
                
            </div>
        </div>
        <div class="row entries-wrap add-top-padding wide">
                <form action="includes/form_handler/create.php" method="post" role="form" class="form" autocomplete="off">

  <div class="form-group">
    <label>Name</label>
    <input type="text" name="username" placeholder="Full Name" class="full-width" class="form-control">
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
    <label>Review Blog Name</label>
    <input type="text" name="blog" placeholder="Name" class="full-width" class="form-control">
  </div>
     <div class="form-group">
    <label>Blog URL</label>
    <input type="text" name="blog_url" placeholder="Your blog URL" class="full-width" class="form-control">
  </div>
           <div class="form-group">
    <label>Share an example of one of your Review</label>
    <input type="text" name="review_url" placeholder="Enter the URL" class="full-width" class="form-control">
  </div>
             <div class="form-group">
    <label>Tell us about youself</label>
    <textarea name="intro"  class="full-width" placeholder=""></textarea>
  </div>
<div class="form-group">
    <label>Instagram</label>
    <input type="text" name="insta" placeholder="Instagram URL" class="full-width" class="form-control">
  </div>
  <div class="form-group">
    <label>Facebook</label>
    <input type="text" name="facebook" placeholder="Facebook URL" class="full-width" class="form-control">
  </div>
    <div class="form-group">
    <label>Twitter</label>
    <input type="text" name="twitter" placeholder="Twitter URL" class="full-width" class="form-control">
  </div>
      <div class="form-group">
    <label>YouTube</label>
    <input type="text" name="youtube" placeholder="YouTube URL" class="full-width" class="form-control">
  </div>
        <div class="form-group">
    <label>Goodreads</label>
    <input type="text" name="goodread" placeholder="Goodreads URL" class="full-width" class="form-control">
  </div>
           <div class="form-group">
    <label>Tell us about the number of visitors/followers/subscribers you have?</label>
    <textarea name="followers" class="full-width" placeholder="Enter the details"></textarea>
  </div>
             <div class="form-group">
    <label>Are you interested in doing author interviews for The Arcadian?</label>
    <input type="text" name="author_inter" placeholder="Yes or No" class="full-width" class="form-control">
  </div>
     <div class="form-group">
                                <label>Role</label>
                                                 <select class="form-control" class="full-width" name="role">
                    <option class="full-width">Reviewer</option>
   

      </select>
                            </div>
               <div class="form-group">
    <label>Before clicking the submit button. Read the Reviewer's <a href = "r_guidelines.php">Terms and conditions here.</a></label>
    
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