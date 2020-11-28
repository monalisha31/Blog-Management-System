<?php
$query = "SELECT * FROM book WHERE B_interview = 'Yes' ORDER BY B_id DESC";
$result = mysqli_query($connection, $query);

while($row = mysqli_fetch_assoc($result)){
  $book_id = $row['B_id'];
    $book_title = $row['B_name'];
    $book_author = $row['B_author'];
    $book_category = $row['B_genre'];
    $book_image = $row['B_image'];
    $book_intro = $row['B_intro'];


  ?> 

  <div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Interested to Interview</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="author_code_d.php" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label> Author Name </label>
                <input type="text" name="name" class="form-control" placeholder="Enter Name">
            </div>
            <div class="form-group">
                <label>Your Email Address</label>
                <input type="email" name="email" class="form-control checking_email" placeholder="Enter Email">
                <small class="error_email" style="color: red;"></small>
            </div>
            <div class="form-group">
                <label>Your Name</label>
                <input type="text" name="username" class="form-control" placeholder="Enter Username">
            </div>
     



        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="registerbtn" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>
           <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
   
    <th>Author Name</th>
    <th>View</th>
    <th>Interested to Interview</th>
 
  



  </thead>
  <tbody>
  <td><?php echo $book_title;?></td>
  <td><a href="book_v.php?book=<?php echo $book_id; ?>" class='btn btn-primary'>View</a></td>
  <td>                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">

                Interested 
            </button></td>
  </tbody>
            

          </table>
        </div>

              <?php }
 ?>