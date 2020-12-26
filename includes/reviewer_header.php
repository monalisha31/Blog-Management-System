<?php
if(isset($_GET['page'])){
        $page_id = $_GET['page'];
      }
      else{
        $page_id = 1;
      }
  $number = 9;
  $query1 = "SELECT * FROM user WHERE U_status ='Verified'";
$result1 = mysqli_query($connection, $query1);
$all_post = mysqli_num_rows($result1);
$total = ceil($all_post / $number);
$start  = ($page_id - 1)* $number;
$query = "SELECT * FROM user WHERE U_status ='Verified' ORDER BY U_id DESC LIMIT $start , $number";

$result = mysqli_query($connection, $query);

while($row = mysqli_fetch_assoc($result)){
  $user_id = $row['U_id'];
    $user_title = $row['U_username'];
    $user_blog = $row['U_blog'];
    $user_blog_url = $row['U_blog_url'];
    $user_image = $row['U_profile_pic'];


  

  ?>
                         <article class="col-block">
                    
                    <div class="item-entry" data-aos="zoom-in">
                        <div class="item-entry__thumb">
                            <a href="single_r.php?user=<?php echo $user_id; ?>" class="item-entry__thumb-link">
                                <img src="dashboard_admin/<?php echo $user_image;?>" 
                                     alt="">
                            </a>
                        </div>
        
                        <div class="item-entry__text">    
                            <div class="item-entry__cat">
                                <a href="reviewer.php">Reviewer</a> 
                            </div>

    
                            <h1 class="item-entry__title"><a href="single_r.php?user=<?php echo $user_id; ?>"><?php echo $user_title;?></a></h1>

                                
                            <div class="item-entry__date">
                                 
                                <a href="<?php echo $user_blog_url; ?>"><?php echo $user_blog;?></a><br>
                                
                            </div>
                        </div>
                    </div> 

                </article> 

<?php }
 ?>