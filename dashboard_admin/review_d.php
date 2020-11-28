<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>
<?php include('includes/helper.php'); ?> 
<?php
if(isset($_GET['delete_review']) && $_GET['delete_review'] != ''){
  $dlt = $_GET['delete_review'];
  if(delete('review','R_id', $dlt)){
    header("Location: review_d.php");
  }
  else{
    echo "fail";
  }
}
?>

<div class="container-fluid">
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Contact Requests
          
    </h6>
  </div>
  <div class="card-body">
  <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
   
    <th>ID</th>
 
    <th>Book Name</th>
    <th>Email Address</th>

    <th>Reviewer</th>
    <th>Delete</th>
    
  </thead>
  <tbody>
    <?php
global $connection;
$query = "SELECT * FROM review";
$result = mysqli_query($connection, $query);
  while ($row = mysqli_fetch_assoc($result)) {
    $R_id = $row['R_id'];
    $book_title = $row['R_book'];
    $contact_email = $row['R_email'];
    $reviewer = $row['R_name'];
   
?>
<tr>
  <td><?php echo $R_id; ?></td>
  <td><?php echo $book_title; ?></td>
  <td><?php echo $contact_email; ?></td>
  <td><?php echo $reviewer; ?></td>
  <td><a href='review_d.php?delete_review=<?php echo $R_id; ?>' class='btn btn-danger'>Delete</a></td>
</tr>
<?php }  ?>
  
  </tbody>
            

          </table>
        </div>
      </div>
<?php
include('includes/scripts.php');
include('includes/footer.php');
?>

<!-- /.container-fluid -->


