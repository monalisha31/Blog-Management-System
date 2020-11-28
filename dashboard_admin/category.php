<?php
session_start();
include('includes/header.php'); 
include('includes/navbar.php'); 
?>









<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Category Records
      <form action="category_edit.php" method="post">
        <button  type="submit" name="edit_btn" class="btn btn-primary float-right"> Add Category</button>

            
              
            </button>
          </form>
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
    <div class="table-responsive">
      <?php
 $server_name = "localhost";
$db_username = "u625807408_arcadian";
$db_password = "Carpediem31";
$db_name = "u625807408_db_contact";

      $connection = mysqli_connect($server_name,$db_username,$db_password,$db_name);
      $query = "SELECT * FROM category";
      $query_run = mysqli_query($connection, $query);
      ?>
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th> ID </th>
            <th> Category Name </th>
            <th>DELETE </th>
          </tr>
        </thead>
        <tbody>
        <?php
         if(mysqli_num_rows($query_run) > 0)        
          {
            while($row = mysqli_fetch_assoc($query_run))
            {
             ?>
               <tr>
              <td><?php  echo $row['C_id']; ?></td>
              <td><?php  echo $row['C_title']; ?></td>

                                

            <td>
            <form action="includes/functions.php" method="post">
                  <input type="hidden" name="delete_id" value="<?php echo $row['C_id']; ?>">
                  <button type="submit" name="delete_btn" class="btn btn-danger"> DELETE</button>
                </form>
            </td>
          </tr>


             <?php
            }
           } 
           else
           {
            echo "No Records Found";
           }
          ?>
        
        
        </tbody>
      </table>

    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>
