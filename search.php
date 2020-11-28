
<?php
include 'includes/header.php';
?>
<body id="top"> 

       <?php
include 'includes/navbar.php';
?>
   
    <section class="s-content s-content--top-padding">

        <div class="row narrow">
            <div class="col-full s-content__header" data-aos="fade-up">
                <h1 class="display-1 display-1--with-line-sep">Search Results</h1>
                
            </div>
        </div>
        
        <div class="row entries-wrap add-top-padding wide">
            <div class="entries">
                      <?php include 'includes/search_post.php'; ?>
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