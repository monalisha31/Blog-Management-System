
<?php
$title = "Books";
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

        <div class="row narrow">
            <div class="col-full s-content__header" data-aos="fade-up">
                <h1 class="display-1 display-1--with-line-sep">Featured Books</h1>
                <a class="btn btn--primary" href="s_guidelines.php">Submit a book for review</a>
                
            </div>
        </div>
        
        <div class="row entries-wrap add-top-padding wide">
            <div class="entries">
                     <?php include 'includes/book_header.php'; ?>
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