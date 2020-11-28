<?php
$title = "Contact Us";
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

        <div class="row narrow">
            <div class="col-full s-content__header">
                <h1 class="display-1 display-1--with-line-sep">Contact Us.</h1>
                <p class="lead">
                	The Arcadian aims to build a global community of readers and authors from all around the world. Language is not a barrier here, every language of books are appreciated and are given a honest review. Our aim is to appreciate literature and help authors and poets to find there targeted audience.  
              </p>
            </div>
        </div>

        <div class="row">
            <div class="col-full s-content__main">
                 <div id="map-wrap">

                    <div id="map-container">
                    		<iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.openstreetmap.org/export/embed.html?bbox=84.77720260620119%2C22.184543853741147%2C84.95727539062501%2C22.277342122223704&amp;layer=mapnik&amp;marker=22.23095066682715%2C84.86723899841309" style="border: 1px solid black"></iframe><br/><small><a href="https://www.openstreetmap.org/?mlat=22.2310&amp;mlon=84.8672#map=13/22.2310/84.8672&amp;layers=N"></a></small>
                    </div>
                  
                </div> 

                <h2>Our Team</h2>
                 



                
             

               
                <div class="row">
               

                    <div class="col-six tab-full">
                        
                      <h4></h4>


                        <p>Monalisha Ojha<br>
                            Co-Founder<br>

                        The Arcadian <br>
                        
                        </p>

                    </div>
                      <div class="col-six tab-full">
                      <h4></h4>

                      
                        <p>Dibyasha Das<br>
                            Co-Founder<br>

                        The Arcadian <br>
                        
                        </p>

                    </div>
                </div>
                <h4>Our Vision</h4>
                <p>
                The Arcadian is the brainchild of two incredible gossip mongers who have long conversations over books, movies, series, songs, lifestyle, and technology. They inevitably end up relating everything to life, all the while crying over fictional characters. </p>
                                <h4>Get In Touch</h4>

                <form name="cForm" id="cForm" class="contact-form" method="post" action="includes/form_handler/contact.php">
                    <fieldset>

                        <div>
                            <input name="cName"  class="full-width" placeholder="Your Name*" value="" type="text">
                        </div>

                        <div class="form-field">
                            <input name="cEmail"  class="full-width" placeholder="Your Email*" value="" type="text">
                        </div>

                       

                        <div class="message form-field">
                        <textarea name="cMessage"  class="full-width" placeholder="Your Message*"></textarea>
                        </div>

                        <div class="form-group">

                        <input type="submit" name="contact_submit" value="Continue" class="submit btn btn--primary btn--large full-width">
                    </div>

                    </fieldset>
                </form>


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