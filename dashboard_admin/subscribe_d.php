<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>
<?php include('includes/helper.php'); ?> 
<?php
if(isset($_GET['delete_contact']) && $_GET['delete_contact'] != ''){
  $dlt = $_GET['delete_contact'];
  if(delete('contact','C_id', $dlt)){
    header("Location: contact_d.php");
  }
  else{
    echo "fail";
  }
}
?>

<div class="container-fluid">
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Subscribe Requests
          
    </h6>
  </div>
  <div class="card-body">
  <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
   
    <th>Subscribe ID</th>
 
    <th>Name</th>
    <th>Email Address</th>

    <th>Message</th>
     <th>Delete</th>
    
  </thead>
  <tbody>
    <?php
global $connection;
$query = "SELECT * FROM contact WHERE C_message = 'Subscribe form' ";
$result = mysqli_query($connection, $query);
  while ($row = mysqli_fetch_assoc($result)) {
    $contact_id = $row['C_id'];
    $contact_title = $row['C_name'];
    $contact_email = $row['C_email'];
    $contact_msg = $row['C_message'];
   
?>
<tr>
  <td><?php echo $contact_id; ?></td>
  <td><?php echo $contact_title; ?></td>
  <td><?php echo $contact_email; ?></td>
  <td><?php echo $contact_msg; ?></td>
  <td><a href='contact_d.php?delete_contact=<?php echo $contact_id; ?>' class='btn btn-danger'>Delete</a></td>
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


