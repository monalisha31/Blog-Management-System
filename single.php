<?php
$title = "Review | The Arcadian";
include 'includes/header.php';




?>

<body id="top"> 



          <?php
include 'includes/navbar.php';
?>
    <section class="s-content s-content--top-padding s-content--narrow">
        <?php
  if(isset($_GET['post'])){
    $p_id = $_GET['post'];
    $query1 = "UPDATE post SET post_views = post_views + 1 WHERE P_id = $p_id";
    $result1 = mysqli_query($connection, $query1);
    if (!$result1) {
      echo "query failed";
      # code...
    }

    $query = "SELECT * FROM post WHERE P_id = $p_id";
    $result = mysqli_query($connection, $query);
  }else{
    header("Location: index.php");
  }

?>
<?php

while($row = mysqli_fetch_assoc($result)){
  $post_id = $row['P_id'];
    $post_title = $row['P_title'];
    $post_author = $row['P_author'];
    $post_category = $row['P_category'];
    $post_category_id = $row['P_category_id'];
    $post_content = $row['P_content'];
   
    $post_status = $row['P_status'];
    $post_image = $row['P_image'];
    $date = $row['P_date'];
    $post_views = $row['P_view'];
    $post_comment_count = $row['P_comment'];

  ?>

        <article class="row entry format-standard">

            <div class="entry__media col-full">
                <div class="entry__post-thumb">
                    <img src="images/blog_banner.jpg" 
                        
                         sizes="(max-width: 2000px) 100vw, 2000px" alt="">
                </div>
            </div>

            <div class="entry__header col-full">
                <h1 class="entry__header-title display-1">
                   <?php echo $post_title; ?>
                </h1>
                <ul class="entry__header-meta">
                    
                    <li class="byline">
                        By
                        <a href="#0"><?php echo $post_author; ?></a>
                    </li>
                </ul>
            </div>

            <div class="col-full entry__main">
               <p><?php echo $post_content; ?></p>
            
            


             


            
                           <div class="entry__taxonomies">
                    <div class="entry__cat">
                        <h5>If you like this post, please like and share it!! </h5>
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
                           <div class="entry__cat">
                     
                        <span class="entry__tax-list">
                             <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
                                 <!-- LikeBtn.com BEGIN -->
<span class="likebtn-wrapper" data-theme="custom" data-btn_size="40" data-f_size="15" data-icon_size="17" data-icon_l_c="#efe7e7" data-icon_l_c_v="#152ce0" data-icon_d_c="#eed9d9" data-icon_d_c_v="#1427e5" data-label_c="#f1d8d8" data-label_c_v="#ece1e1" data-counter_l_c="#f7f0f0" data-counter_d_c="#ede4e4" data-bg_c="#474242" data-ef_voting="push" data-counter_count="true"></span>
<script>(function(d,e,s){if(d.getElementById("likebtn_wjs"))return;a=d.createElement(e);m=d.getElementsByTagName(e)[0];a.async=1;a.id="likebtn_wjs";a.src=s;m.parentNode.insertBefore(a, m)})(document,"script","//w.likebtn.com/js/w/widget.js");</script>
<!-- LikeBtn.com END -->
       
                                 

</div>



                            
                           
                        </span>
                    </div>
                </div>

        
            </div>

            
         
<!-- AddToAny END -->

        </article>
         <?php }




    ?>
    <!-- AddToAny BEGIN -->


                

 
                      <?php
                if(isset($_GET['post'])) {
                  $id = $_GET['post'];
                  if(isset($_POST['comment'])) {
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $body = $_POST['body'];
                    $comment_obj->addComments($id, $name, $email, $body);
                  }
                }
              ?>
                  <div class="comments-wrap">

            <div class="row comment-respond">
                <div id="comments" class="row">
                <div class="col-full">
                      <h3 class="h2">                <?php
                  (isset($_GET['post'])) ? $post_id = $_GET['post'] : $post_id = 0;
                  $query = mysqli_query($connection, "SELECT * FROM comment WHERE Co_status='Approved' AND post_id=$post_id");
                  $num_comments = mysqli_num_rows($query);
                  echo $num_comments . " comment(s)";
                 ?></h3>
                    <ol class="commentlist">
                             <?php
                         if(isset($_GET['post'])) {
                            $id = $_GET['post'];
                        $comment_obj->getApprovedComments($id);
                      }
                        ?>

</ol>
                </div>
            </div>


                <!-- START respond -->
                <div id="respond" class="col-full">

                    <h3 class="h2">Add Comment <span>Your email address will not be published</span></h3>

                    <form name="contactForm" id="contactForm" method="post" action="single.php?post=<?php echo $post_id; ?>" autocomplete="off">
                        <fieldset>

                            <div class="form-field">
                                <input name="name" id="cName" class="full-width" placeholder="Your Name*" value="" type="text">
                            </div>

                            <div class="form-field">
                                <input name="email" id="cEmail" class="full-width" placeholder="Your Email*" value="" type="text">
                            </div>

                          

                            <div class="message form-field">
                                <textarea name="body" id="cMessage" class="full-width" placeholder="Your Message*"></textarea>
                            </div>

                            <input name="comment" id="submit" class="btn btn--primary btn-wide btn--large full-width" value="Add Comment" type="submit">

                        </fieldset>
                    </form> <!-- end form -->

                </div>
                <!-- END respond-->

            </div> <!-- end comment-respond -->

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