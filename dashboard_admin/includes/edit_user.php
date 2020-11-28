
<?php


 if(isset($_GET['edit_user']) && $_GET['edit_user'] != ''){
  $edit_id = $_GET['edit_user'];
  $query = mysqli_query($connection , "SELECT * FROM user WHERE U_id=$edit_id");
  if (mysqli_num_rows($query) > 0) {
    $data = mysqli_fetch_array($query);
  $usr = $data['U_username'];
  $em = $data['U_email'];
  $blog = $data['U_blog'];
  $blogurl = $data['U_blog_url'];
  $introduction = $data['U_intro'];
    $instagram = $data['U_insta'];
    $facebook = $data['U_facebook'];
    $twitter = $data['U_twitter'];
    $youtube = $data['U_youtube'];
    $goodreads = $data['U_goodread'];

  }
}
  else{
    die("Failed");
 }


?>
<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">
            Reviewer Profile
    </h6>
      
  </div>

  <div class="card-body">


 
    <img src="<?php echo $data['U_profile_pic']; ?>" alt="" style="width: 150px; height: 150px; border-radius: 100%;">

          <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary"><?php echo $data['U_username']; ?></h6>
                </div>
                <div class="card-body">
                  <p><?php echo $data['U_intro']; ?></p>
                    <a href="index.php"> 
                  <button type="button" class="btn btn-primary float-right">

              <?php echo $data['U_blog']; ?>
            </button>
                </div>

             
              </div>
              
                          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><a href="<?php echo $data['U_insta']; ?>">Instagram</a></div>
                      
                    </div>
                  <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1"><a href="<?php echo $data['U_facebook']; ?>">Facebook</a></div>
                     
                    </div>
                      <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1"><a href="<?php echo $data['U_twitter']; ?>">Twitter</a></div>
              
                    </div>
                   <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
               
               
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1"><a href="<?php echo $data['U_youtube']; ?>">YouTube</a></div>
                     
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
    <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Review Sample</h6>
                </div>
                <div class="card-body">
                  <p><?php echo $data['U_review_url'];
 ?></p>
             
                </div>

             
              </div>

                    <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Email</h6>
                </div>
                <div class="card-body">
                  <p><?php echo $data['U_email']; ?></p>
               
                </div>

             
              </div>

                    <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Followers Details</h6>
                </div>
                <div class="card-body">
                  <p><?php echo $data['U_follower']; ?></p>
               
                </div>

             
              </div>
                     <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Author Interview</h6>
                </div>
                <div class="card-body">
                  <p><?php echo $data['U_follower']; ?></p>
               
                </div>

             
              </div>
                      <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Status</h6>
                </div>
                <div class="card-body">
                  <p><?php echo $data['U_status']; ?></p>
               
                </div>

             
              </div>
           
     


  
</div>

</div>
<?php
include('includes/scripts.php');
include('includes/footer.php');
?>

<!-- /.container-fluid -->


