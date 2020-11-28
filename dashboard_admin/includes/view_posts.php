
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Post Records
          
    </h6>
  </div>
  <div class="card-body">
  <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
   
    <th>Post Title</th>
 
    <th>Post Status</th>
    <th>Post Views</th>
 <?php

   if($role === "Admin"){
   echo "<th>Approve Post</th>"; 
 }  ?>
    <th>Edit</th>
    <th>Delete</th>
  </thead>
  <tbody>
  <?php show_posts(); ?>
  </tbody>
            

          </table>
        </div>



