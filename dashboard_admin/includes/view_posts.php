<?php
     if(isset($_GET['page'])){
        $page_id = $_GET['page'];
      }
      else{
        $page_id = 1;
      }
$number = 2;
$query = "SELECT * FROM post";
$result = mysqli_query($connection, $query);
$all_post = mysqli_num_rows($result);
$total = ceil($all_post / $number);
$start  = ($page_id - 1)* $number;
?>
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
          <nav aria-label="Page navigation example">
  <ul class="pagination">
  <?php
  for ($i=1; $i <= $total ; $i++) { 
    # code...
    echo "<li class='page-item ".($page_id == $i ? 'active' : '')."'><a class='page-link' href='post.php?page=".$i."'>$i</a></li>";
  }
  ?>
     
  </ul>
</nav>
        </div>



