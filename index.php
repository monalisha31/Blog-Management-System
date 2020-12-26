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

                          <a class="btn btn--primary" href="submit.php">Submit Book</a>
                            </div> 
                        </div> 
                    </div> 
                    <div class="featured__slide">

                        <div class="entry">

                            <div class="entry__background" style="background-image:url('images/intro2.jpg');"></div>
                            
                            <div class="entry__content">
                                <span class="entry__category"><a href="index.php">THE ARCADIAN</a></span>

                                <h1><a href="index.php" title="">Share your reviews with the world</a></h1>

                         <a class="btn btn--primary" href="reviewer_register.php">Apply Now</a>
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
            <div class="row pagination-wrap">
            <div class="col-full">
                <nav class="pgn" data-aos="fade-up">
                    <ul>
                        <li><a class="pgn__prev" href="#0">Prev</a></li>
                        <?php
  for ($i=1; $i <= $total ; $i++) { 
    # code...
    echo "<li".($page_id == $i ? '' : '')."'><a class='pgn__num' href='index.php?page=".$i."'>$i</a></li>";
  }
  ?>
  <li><a class="pgn__next" href="#0">Next</a></li>
                      
                    </ul>
                </nav>
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