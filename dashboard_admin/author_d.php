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
            Author Interview
    </h6>
        </div>

  <div class="card-body">


 
    

      <?php
  if (isset($_SESSION['success']) && $_SESSION['success'] != '' ) 
  {
    echo '<p>' ,$_SESSION['success'],'</p>';
    unset($_SESSION['success']);
  }
    if (isset($_SESSION['status']) && $_SESSION['status'] != '' ) 
  {
    echo '<p>' ,$_SESSION['status'],'</p>';
    unset($_SESSION['status']);
  }
  ?>
              
                          <!-- Content Row -->
          <?php include 'includes/author_d_header.php'; ?>

</div>
<?php
include('includes/scripts.php');
include('includes/footer.php');
?>

<!-- /.container-fluid -->


