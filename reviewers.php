<?php
$title = "Reviewers";
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
                <h1 class="display-1 display-1--with-line-sep">Reviewers</h1> 
                 <p class="lead">The revered reviewers of The Arcadian.</p>               
            </div>
        </div>
        
        <div class="row entries-wrap add-top-padding wide">
            <div class="entries">
                  <?php include 'includes/reviewer_header.php'; ?>

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
    echo "<li".($page_id == $i ? '' : '')."'><a class='pgn__num' href='reviewers.php?page=".$i."'>$i</a></li>";
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