<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; 
$email = $_SESSION['userLogged'];
$query = mysqli_query($connection , "SELECT * FROM user WHERE U_email = '$email'");
$data = mysqli_fetch_array($query);

if (isset($_POST['update'])) {
  $usr = $_POST['username'];
  $em = $_POST['email'];
  if(!empty($usr) && !empty($em)){
    $query = mysqli_query($connection , "UPDATE user SET U_username = '$usr' , U_email = '$em' WHERE U_email ='$email'");
    if($query){
      $_SESSION['userLogged'] = $em;
      header("Location:profile.php");
    }
  }
}

?>
<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">
            
    </h6>
       <p class="alert alert-info col-md-12">To update your profile picture and password go to the <a href="setting.php"><b>settings</b></a> page</p>
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

           
     


  
</div>

</div>
<?php
include('includes/scripts.php');
include('includes/footer.php');
?>

<!-- /.container-fluid -->


