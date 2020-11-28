<?php
session_start();
include('includes/header.php'); 
include('includes/navbar.php'); 
include('includes/helper.php'); 
if(isset($_GET['del_com']) && $_GET['del_com'] != ''){
  $d_id = $_GET['del_com'];
  if(delete('comment','Co_id', $d_id)){
    header("Location: comment.php");
  }
}
if(isset($_GET['unp']) && $_GET['unp'] != ''){
  $un = $_GET['unp'];
  if(confirm($un)){
    header("Location: comment.php");
  }
}
if(isset($_GET['app']) && $_GET['app'] != ''){
  $app = $_GET['app'];
  if(confirm($app)){
    header("Location: comment.php");
  }
}


?>





<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Comment Records
           
    </h6>
  </div>

    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th> ID </th>
            <th> Name </th>
            <th>Email </th>
            <th>Body</th>
            <th>Status</th>
            <th>Post ID</th>
               <?php if($role === "Admin"){
                                echo '<th colspan="2" class="text-center">Action</th>';
                              } ?>

          </tr>
        </thead>
        <tbody>
                                      <?php
                                require '../classes/comment.php';
                                $comment_obj = new Comment($connection);
                                $comment_obj->getComments();
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
