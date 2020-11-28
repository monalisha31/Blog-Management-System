<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; 

$email = $_SESSION['userLogged'];
if (isset($_POST['update_image'])) {
  $pwd=$_POST['conf_pwd'];
  $query = mysqli_query($connection , "SELECT U_password FROM user WHERE U_email = '$email'");
  $record = mysqli_fetch_array($query);
  $hashPwd = md5($pwd);
  $pwdfromdb = $record['U_password'];
  if($pwdfromdb == $hashPwd){
        if (isset($_FILES['image_file'])) {
      $dir = "images/";
      $target_file = $dir.basename($_FILES['image_file']['name']);
      if (move_uploaded_file($_FILES['image_file']['tmp_name'],$target_file)) {
       $query = mysqli_query($connection , "UPDATE user SET U_profile_pic = '$target_file' WHERE U_email ='$email'");
       if ($query) {
        header("Location:profile.php");
         # code...
       }
      }else{
        echo "Something went wrong while uploading image";
      }
    }

  }else{
    die("Password do not match");
  }

  
}

?>

<?php 
$email1 = $_SESSION['userLogged'];
$query1 = mysqli_query($connection , "SELECT * FROM user WHERE U_email = '$email1'");
$data1 = mysqli_fetch_array($query1);

if (isset($_POST['update'])) {
  $usr = $_POST['username'];
  $em = $_POST['email'];
  $blog = $_POST['blog'];
  $blogurl = $_POST['blogurl'];
  $introduction = $_POST['intro'];
    $instagram = $_POST['insta'];
    $facebook = $_POST['facebook'];
    $twitter = $_POST['twitter'];
    $youtube = $_POST['youtube'];
    $goodreads = $_POST['goodread'];



  if(!empty($usr) && !empty($em)){
    $query2 = mysqli_query($connection , "UPDATE user SET U_username = '$usr' , U_email = '$em' , U_blog = '$blog', U_blog_url = '$blogurl' , U_intro = '$introduction', U_insta = '$instagram' , U_facebook = '$twitter' , U_youtube = '$youtube' , U_goodread = '$goodreads' WHERE U_email ='$email'");
    if($query2){
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
            Update Profile Picture
    </h6>
     
  </div>

  <div class="card-body">


 
    
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="username">Picture to upload</label>
                                <input type="file" name="image_file" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="email">Confirm Passowrd</label>
                                <input type="passowrd" name="conf_pwd" class="form-control">
                            </div>
                       
                            <div class="form-group">
                                <input type="submit" name="update_image" class="btn btn-success" value="Update your profile picture">
                            </div>
                        </div>
                    </form>
                       <form action="" method="post">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="username">Name</label>
                                <input type="text" name="username" class="form-control" value="<?php echo $data1['U_username']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" value="<?php echo $data1['U_email']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="role">Role</label>
                                <input type="text" name="role" class="form-control" value="<?php echo $data1['U_role']; ?>" disabled>
                            </div>
                            <div class="form-group">
                                <label for="username">Blog Name</label>
                                <input type="text" name="blog" class="form-control" value="<?php echo $data1['U_blog']; ?>">
                            </div>
                                 <div class="form-group">
                                <label for="username">Blog URL</label>
                                <input type="text" name="blogurl" class="form-control" value="<?php echo $data1['U_blog_url']; ?>">
                            </div>
                           <div class="form-group">
    <label>Your Introduction</label>
    <textarea name="intro" rows="8" cols="80" class="form-control"><?php echo $data1['U_intro']; ?></textarea>
  
  </div>
<div class="form-group">
    <label>Instagram</label>
    <input type="text" name="insta" placeholder="Instagram URL" value="<?php echo $data1['U_insta']; ?>" class="form-control">
  </div>
  <div class="form-group">
    <label>Facebook</label>
    <input type="text" name="facebook"  value="<?php echo $data1['U_facebook']; ?>" class="form-control">
  </div>
    <div class="form-group">
    <label>Twitter</label>
    <input type="text" name="twitter" placeholder="Twitter URL" value="<?php echo $data1['U_twitter']; ?>"  class="form-control">
  </div>
      <div class="form-group">
    <label>YouTube</label>
    <input type="text" name="youtube" placeholder="YouTube URL" value="<?php echo $data1['U_youtube']; ?>" class="form-control">
  </div>
        <div class="form-group">
    <label>Goodreads</label>
    <input type="text" name="goodread" placeholder="Goodreads URL" value="<?php echo $data1['U_goodread']; ?>"  class="form-control">
  </div>


                            <div class="form-group">
                                <input type="submit" name="update" class="btn btn-success" value="Update your profile">
                            </div>
                        </div>
                    </form>


  
</div>

</div>
<?php
include('includes/scripts.php');
include('includes/footer.php');
?>

<!-- /.container-fluid -->


