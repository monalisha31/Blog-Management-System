<?php
$title = "Reviewer";
include 'includes/header.php';
?>

<body id="top"> 

          <?php
include 'includes/navbar.php';
?>
    <section class="s-content s-content--top-padding s-content--narrow">
        <?php
  if(isset($_GET['user'])){
    $u_id = $_GET['user'];

    $query = "SELECT * FROM user WHERE U_id = $u_id";
    $result = mysqli_query($connection, $query);
      $sql1 = "SELECT * FROM post WHERE P_user_id = $u_id";
 $res1 = mysqli_query($connection, $sql1);
  }else{
    header("Location: index.php");
  }

?>
<?php

while($row = mysqli_fetch_assoc($result)){
  $user_id = $row['U_id'];
    $user_title = $row['U_username'];
    $user_blog = $row['U_blog'];
    $user_blog_url = $row['U_blog_url'];
    $user_image = $row['U_profile_pic'];
    $user_intro = $row['U_intro'];
    $instagram = $row['U_insta'];
    $facebook = $row['U_facebook'];
    $twitter = $row['U_twitter'];
    $youtube = $row['U_youtube'];
    $goodreads = $row['U_goodread'];


  ?>

        <article class="row entry format-standard">

      

            <div class="entry__header col-full">
                <h1 class="entry__header-title display-1">
                   <?php echo $user_title; ?>
                </h1>
                <ul class="entry__header-meta">
                    
                    <li class="byline">
                        
                        <a href="#0">VERIFIED REVIEWER OF THE ARCADIAN</a>
                    </li>
                </ul>
            </div>

            <div class="col-full entry__main">
               <p><?php echo $user_intro; ?></p>
            
            


             



        
            </div>

        </article>
         <?php }




    ?>
      <section class="s-content s-content--top-padding">

    
              <div class="row half-bottom">

            <div class="col-six tab-full">


               <p><img src="images/Arcadian1.png" 
                         
                        sizes="(max-width: 1000px) 100vw, 1000px" alt=""></p>
            </div>

            <div class="col-six tab-full">


                <aside class="pull-quote">
                    <blockquote>
                    <p>I hope you can spare a minute of your time to look at my blog and provide some feedback.</p>
                    </blockquote>
                </aside>
                <a class="btn btn--primary full-width" href="<?php echo $user_blog_url; ?>"><?php echo $user_blog; ?></a>
                    

                                   <ul class="footer-social">
                        <li>
                            <a class="btn btn--primary full-width" href="<?php echo $facebook; ?>"><i class="fab fa-facebook"></i></a>
                        </li>
                        <li>
                            <a class="btn btn--primary full-width" href="<?php echo $twitter; ?>"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li>
                            <a class="btn btn--primary full-width" href="<?php echo $instagram; ?>"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li>
                            <a class="btn btn--primary full-width" href="<?php echo $youtube; ?>"><i class="fab fa-youtube"></i></a>
                        </li>
                      
                    </ul>
             

              


            </div>
                    <div class="entry__header col-full">
                <h1 class="entry__header-title display-1">
                   
                </h1>
                         </div>
               <div class="entry__header col-full">
                <h1 class="entry__header-title display-1">
                   Posts
                </h1>
                         </div>

  
        </div>
                                           <?php
          while ($row = mysqli_fetch_array($res1)) {
            $cat_title = $row['P_title'];
            $post_id = $row['P_id'];
            $post_content = substr($row['P_content'], 0,500);
            

    ?>
                         <!-- end s-content__taxonomies -->
<article>
                <div class="entry__author">
                    

                    <div class="entry__author-about">
                        <h5 class="entry__author-name">
                            <span>Review</span>

                           <a href="single.php?post=<?php echo $post_id; ?>"><?php echo $cat_title; ?></a>
                        </h5>

                        <div class="entry__author-desc">
                            <p>
                     <?php echo $post_content; ?>                            </p>
                        </div>
                    </div>
                </div>
 
</article>
         <?php }




    ?>

        
           

            
        </div>

   

       



    </section>
                

 
                      

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