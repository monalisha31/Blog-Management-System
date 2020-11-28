 <section class="s-extra">

        <div class="row">

            <div class="col-seven md-six tab-full popular">
                <h3>Recent Posts</h3>

                <div class="block-1-2 block-m-full popular__posts">
                    <?php
$query = "SELECT * FROM post WHERE P_status ='published' ORDER BY P_id DESC LIMIT 6";
$result = mysqli_query($connection, $query);

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
                    <article class="col-block popular__post">
                        <a href="single.php?post=<?php echo $post_id; ?>" class="popular__thumb">
                            <img src="dashboard_admin/images/<?php echo $post_image;?>" alt="">
                        </a>

                        <h5><a href="single.php?post=<?php echo $post_id; ?>"><?php echo $post_title;?></h5>
                        <section class="popular__meta">
                            <span class="popular__author"><span>By</span> <a href="single.php?post=<?php echo $post_id; ?>"><?php echo $post_author;?></a></span>
                            <span class="popular__date"><span>on</span> <time datetime="2018-06-14"><?php echo $date;?></time></span>
                        </section>
                    </article>

                    <?php }
 ?>
                
                   
                </div> 
            </div>

            <div class="col-four md-six tab-full end">
        
                    <div class="col-twelve md-twelve mob-full sitelinks">
                        <h3>Site Links</h3>
        
                        <ul class="linklist">
                            <li><a href="s_guidelines.php">Submission Guidelines</a></li>
                            <li><a href="submit.php">Submit a Book</a></li>
                            <li><a href="reviewer_register.php">Become a Reviewer</a></li>
                            <li><a href="r_guidelines.php">Reviewer Guidlines</a></li>
                             <li><a href="page-contact.php">About Us</a></li>
                            <li><a href="terms.php">Terms</a></li>
                            <li><a href="privacy.php">Privacy Policy</a></li>
                           
                        </ul>
                    </div> 
                </div>
            </div>
        </div> 

    </section> 