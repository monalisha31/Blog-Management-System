   <?php
   $title = "The Arcadian";
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
    <section class="s-featured">
        <div class="row">
            <div class="col-full">

                <div class="featured-slider featured" data-aos="zoom-in">

                    <div class="featured__slide">
                        <div class="entry">

                            <div class="entry__background" style="background-image:url('images/intro1.jpg');"></div>
                            
                            <div class="entry__content">
                                <span class="entry__category"><a href="index.php">THE ARCADIAN</a></span>

                                <h1><a href="index.php" title="">Connecting books with readers</a></h1>

                          <a class="btn btn--primary" href="s_guidelines.php">Submit Book for Review</a>
                            </div> 
                        </div> 
                    </div> 
                    <div class="featured__slide">

                        <div class="entry">

                            <div class="entry__background" style="background-image:url('images/intro2.jpg');"></div>
                            
                            <div class="entry__content">
                                <span class="entry__category"><a href="index.php">THE ARCADIAN</a></span>

                                <h1><a href="index.php" title="">Start your reading journey with us</a></h1>

                         <a class="btn btn--primary" href="r_guidelines.php">Apply to be a reviewer</a>
                            </div> 
                            
                        </div> 

                    </div> 
                    <div class="featured__slide">

                        <div class="entry">

                            <div class="entry__background" style="background-image:url('images/intro3.jpg');"></div>

                            <div class="entry__content">
                                <span class="entry__category"><a href="index.php">THE ARCADIAn</a></span>

                                <h1><a href="index.php" title="">Discover the next Bestsellers with us</a></h1>

                           <a class="btn btn--primary" href="book.php">Discover Books</a>
                            </div>

                        </div> 

                    </div> 
                    
                </div> 
            </div> 
        </div>
    </section>
      <section class="s-content s-content--top-padding">

  
        
        <div class="row entries-wrap add-top-padding wide">
            <div class="entries">
                     <?php include 'includes/post_header.php'; ?>
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