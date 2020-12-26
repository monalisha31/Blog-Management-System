<?php
$title = "Subscribe";
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
    <section class="s-content s-content--top-padding s-content--narrow">

      

       


  
        <div class="row">
            <div class="col-full s-content__main">
              <div class="row narrow">
            <div class="col-full s-content__header" data-aos="fade-up">
                <h1 class="display-1 display-1--with-line-sep">Subscribe</h1>

                
                 <p>Stay tuned to our latest posts and discover some great book as soon as they released.</p>

                <form name="cForm" id="cForm" class="contact-form" method="post" action="includes/form_handler/contact.php">
                    <fieldset>

                        <div>
                            <input name="cName"  class="full-width" placeholder="Your Name*" value="" type="text">
                        </div>

                        <div class="form-field">
                            <input name="cEmail"  class="full-width" placeholder="Your Email*" value="" type="text">
                        </div>

                       

                        <div class="message form-field">
                        <input name="cMessage"  type="hidden" class="full-width" placeholder="Your Message*" value ="Subscribe form"></input>
                        </div>

                        <div class="form-group">

                        <input type="submit" name="contact_submit" value="Continue" class="submit btn btn--primary btn--large full-width">
                    </div>

                    </fieldset>
                </form>
                
                
            </div>
        </div>


    
          


            </div> <!-- s-content__main -->
        </div> <!-- end row -->



               
            


            </div> 
        </div> 

    </section> 

        <?php
include 'includes/post.php';
include 'includes/footer.php';
include 'includes/scripts.php';

?>

</body>

</html>