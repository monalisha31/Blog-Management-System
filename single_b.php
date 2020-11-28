<?php
$title = "Book";
include 'includes/header.php';
?>

<body id="top"> 

          <?php
include 'includes/navbar.php';
?>
    <section class="s-content s-content--top-padding s-content--narrow">
        <?php
  if(isset($_GET['book'])){
    $b_id = $_GET['book'];

    $query = "SELECT * FROM book WHERE B_id = $b_id";
    $result = mysqli_query($connection, $query);
   
  }else{
    header("Location: index.php");
  }

?>
<?php

while($row = mysqli_fetch_assoc($result)){
  $book_id = $row['B_id'];
    $book_title = $row['B_name'];
    $book_author = $row['B_author'];
    $book_category = $row['B_genre'];
    $book_image = $row['B_image'];
     $book_intro = $row['B_intro'];
     $book_url = $row['B_amazon'];
          $book_author_intro = $row['B_author_int'];


  ?>

        <article class="row entry format-standard">

      

            <div class="entry__header col-full">
                <h1 class="entry__header-title display-1">
                   <?php echo $book_title; ?>
                </h1>
                <ul class="entry__header-meta">
                    
                    <li class="byline">
                        By
                        <a href="#0"><?php echo $book_author; ?></a>
                    </li>
                </ul>
            </div>

            <div class="col-full entry__main">
               <p><?php echo $book_intro; ?></p>
            
            


             



        
            </div>
                  <section class="s-content s-content--top-padding">

    
              <div class="row half-bottom">

            <div class="col-six tab-full">


               <p><img src="images/blog_image.jpg" 
                         
                        sizes="(max-heigth: 1000px) 100vw, 1000px" alt=""></p>
            </div>

            <div class="col-six tab-full">


                <aside class="pull-quote">
                    <blockquote>
                    <p>What are you waiting for !! Grab you own copy now</p>
                    </blockquote>
                </aside>
                <a class="btn btn--primary full-width" href="<?php echo $book_url; ?>">Buy Now</a>
                  
             

              


            </div>
                    <div class="entry__header col-full">
                <h1 class="entry__header-title display-1">
                   
                </h1>
                         </div>
               <div class="entry__header col-full">
                <h1 class="entry__header-title display-1">
                   <?php echo $book_author; ?>
                </h1>
                         </div>

  
        </div>

                         <!-- end s-content__taxonomies -->
                            <div class="col-full entry__main">
               <p><?php echo $book_author_intro; ?></p>
            
            

             <div class="entry__taxonomies">
                    <div class="entry__cat">
                        <h5>If you like this book, please share it!! </h5>
                        <span class="entry__tax-list">
                             <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
<a class="a2a_dd" href="https://www.addtoany.com/share"></a>
<a class="a2a_button_facebook"></a>
<a class="a2a_button_twitter"></a>
<a class="a2a_button_email"></a>
<a class="a2a_button_whatsapp"></a>
<a class="a2a_button_linkedin"></a>
<a class="a2a_button_google_gmail"></a>
<a class="a2a_button_copy_link"></a>
<a class="a2a_button_telegram"></a>
</div>
<script async src="https://static.addtoany.com/menu/page.js"></script>
                            
                           
                        </span>
                    </div>
                </div>
             



        
            </div>
            
                    
              


        
           

            
        </div>

   

       



    </section>

        </article>
         <?php }




    ?>

                

 
                      

</ol>
                </div>
            </div>


                <!-- START respond -->
               
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