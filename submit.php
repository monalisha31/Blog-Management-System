


<?php
$title = "Submit a book";
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
                <h1 class="display-1 display-1--with-line-sep">Submit book for review</h1>
                <p class="lead">Submit the following form with correct details. Read the <a href = "s_guidelines.php"> submission guidelines</a> for more details.</p>
                
            </div>
        </div>
        <div class="row entries-wrap add-top-padding wide">
                <form action="includes/form_handler/book_register.php" method="post" role="form" class="form" autocomplete="off" enctype="multipart/form-data">

  <div class="form-group">
    <label>Book Name</label>
    <input type="text" name="name" placeholder="Book Name" class="full-width" class="form-control">
  </div>
  <div class="form-group">
    <label>Author</label>
    <input type="text" name="author" placeholder="Author Name" class="full-width" class="form-control">
  </div>
    <div class="form-group">
    <label> Author Email Address</label>
    <input type="email" name="email" placeholder="E-Mail" class="full-width" class="form-control">
  </div>

    <div class="form-group">
    <label>Genre</label>
    <input type="text" name="genre" placeholder="Genre" class="full-width" class="form-control">
  </div>

             <div class="form-group">
    <label>Synopsis</label>
    <textarea name="synopsis"  class="full-width" rows="8" cols="80" placeholder=""></textarea>
  </div>
<div class="form-group">
    <label>Author's Website</label>
    <input type="text" name="website" placeholder="If you don't have a website yet , send us your main social media account link" class="full-width" class="form-control">
  </div>
  <div class="form-group">
    <label>Amazon Link (or any other website where your book is currently selling)</label>
    <input type="text" name="amazon" placeholder="Book URL" class="full-width" class="form-control">
  </div>
    <div class="form-group">
    <label>Book launch date</label>
    <input type="text" name="price"   placeholder="Book launch date" class="full-width" class="form-control">
  </div>
  
           <div class="form-group">
    <label>Author's Introduction</label>
    <textarea name="intro" class="full-width" placeholder="Tell us about yourself."></textarea>
  </div>
             <div class="form-group">
    <label>Are you interested in doing an author interview  for The Arcadian?</label>
                                                     <select class="form-control" class="full-width" name="author_inter">
                    <option class="full-width">Yes</option>
                    <option class="full-width">No</option>
   

      </select>
  </div>

               <div class="form-group">
        <label for="">Book Cover Image</label>
        <input type="file" name="book_image"  class="form-control">
      </div>
               <div class="form-group">
    <label>Before clicking the submit button. Read the submission guidelines.</label>
    
  </div>


  <div class="form-group">
    <input type="submit" name="book_submit" value="Continue" href = "" class="submit btn btn--primary btn--large full-width">
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