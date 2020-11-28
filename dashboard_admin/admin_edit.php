<?php
session_start();
include('includes/header.php'); 
include('includes/navbar.php'); 
?>
<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Edit Admin Records
            
    </h6>
  </div>

  <div class="card-body">
  	<?php
$server_name = "localhost";
$db_username = "u625807408_arcadian";
$db_password = "Carpediem31";
$db_name = "u625807408_db_contact";

$connection = mysqli_connect($server_name,$db_username,$db_password,$db_name);
  	 if(isset($_POST['edit_btn']))
 {
    $id = $_POST['edit_id'];
    $query = "SELECT * FROM admin WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);
      foreach($query_run as $row)
       {
          ?>

 
  	<form action="admin_code.php" method="POST">
  		<input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>">
  	 <div class="form-group">
                <label> Name </label>
                <input type="text" name="edit_name" value="<?php echo $row['name'] ?>" class="form-control" placeholder="Enter Username">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="edit_email" value="<?php echo $row['email'] ?>" class="form-control checking_email" placeholder="Enter Email">
                <small class="error_email" style="color: red;"></small>
            </div>
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="edit_username" value="<?php echo $row['username'] ?>" class="form-control" placeholder="Enter Password">
            </div>
                <div class="form-group">
                <label>Joining Date</label>
                <input type="text" name="edit_date" value="<?php echo $row['Jdate'] ?>" class="form-control" placeholder="Enter Password">
            </div>

                <div class="form-group">
                <label>Usertype</label>
                <input type="text" name="edit_usertype" value="<?php echo $row['usertype'] ?>" class="form-control" placeholder="Enter Password">
            </div>

           
            <a href="admin.php" class="btn btn-danger"> CANCEL </a>
             <button type="submit" name="updatebtn" class="btn btn-primary"> UPDATE </button>
             </form>
                               <?php
                }
            }
        ?>
         


  
</div>

</div>
<!-- /.container-fluid -->


<?php
include('includes/scripts.php');
include('includes/footer.php');
?>
