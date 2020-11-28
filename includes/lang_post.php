<?php
(isset($_GET['lang_id'])) ? $lang_id = $_GET['lang_id'] : header("Location: index.php");
$query = "SELECT * FROM post WHERE P_lang_id=$lang_id ORDER BY P_id DESC";
$result = mysqli_query($connection, $query);
if(mysqli_num_rows($result) === 0) {
  echo "<p>No posts here!</p>";
}{
while($row = mysqli_fetch_assoc($result)){
  $post_id = $row['P_id'];
    $post_title = $row['P_title'];
    $post_author = $row['P_author'];
    $post_category = $row['P_category'];
    $post_category_id = $row['P_category_id'];
    $post_content = $row['P_content'];
    $post_lang = $row['P_lang'];
    $post_status = $row['P_status'];
    $post_image = $row['P_image'];
    $date = $row['P_date'];
    $post_views = $row['P_view'];
    $post_comment_count = $row['P_comment'];

  ?>
                         <article class="col-block">
                    
                    <div class="item-entry" data-aos="zoom-in">
                        <div class="item-entry__thumb">
                            <a href="single.php?post=<?php echo $post_id; ?>" class="item-entry__thumb-link">
                                <img src="dashboard_admin/images/<?php echo $post_image;?>" 
                                     alt="">
                            </a>
                        </div>
        
                        <div class="item-entry__text">    
                            <div class="item-entry__cat">
                                <a href="category.php"><?php echo $post_category;?></a> 
                            </div>

    
                            <h1 class="item-entry__title"><a href="single.php?post=<?php echo $post_id; ?>"><?php echo $post_title;?></a></h1>

                                
                            <div class="item-entry__date">
                                <a href="single.php?post=<?php echo $post_id; ?>"><?php echo $post_author;?></a><br>
                                
                            </div>
                        </div>
                    </div> 

                </article> 

<?php }}
 ?>