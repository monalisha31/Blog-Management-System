<?php

$title = "Authors";
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
                <h1 class="display-1 display-1--with-line-sep">Feautured Authors</h1>                
            </div>
        </div>
        
        <div class="row entries-wrap add-top-padding wide">
            <div class="entries">
                   <article class="col-block">
                    
                    <div class="item-entry" data-aos="zoom-in">
                        <div class="item-entry__thumb">
                            <a href="author_1.php" class="item-entry__thumb-link">
                                <img src="images/flippa.png" 
                                     alt="">
                            </a>
                        </div>
        
                        <div class="item-entry__text">    
                            <div class="item-entry__cat">
                                <a href="authors.php">Authors</a> 
                            </div>
    
                            <h1 class="item-entry__title"><a href="author_1.php">Author_1</a></h1>
                                
                            <div class="item-entry__date">
                                <a href="author_1.php">INTERVIEW</a>
                            </div>
                        </div>
                    </div> 

                </article> 

     

        


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