<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<?php
  if(isset($_GET['book'])){
    $b_id = $_GET['book'];

    $query = "SELECT * FROM book WHERE B_id = $b_id";
    $result = mysqli_query($connection, $query);
   
  }else{
    header("Location: index.php");
  }

?>
  <div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Interested in Review</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="book_code.php" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label> Book Name </label>
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
<?php

while($row = mysqli_fetch_assoc($result)){
  $book_id = $row['B_id'];
    $book_title = $row['B_name'];
    $book_author = $row['B_author'];
    $book_category = $row['B_genre'];
    $book_image = $row['B_image'];
     $book_intro = $row['B_intro'];
     $book_url = $row['B_amazon'];
     $author_int = $row['B_author_int'];


  ?>
<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">
         <?php echo $book_title; ?>   
    </h6>
      
  </div>

  <div class="card-body">


 
    <img src="../<?php echo $book_image;?>" alt="" style="width: 150px; height: 150px; border-radius: 100%;">

          <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">About the Book</h6>
                </div>
                <div class="card-body">
                  <p>Genre : <?php echo $author_int;?></p>
                  <p><?php echo $book_intro;?></p>
            
                </div>

             
              </div>
                        <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Author : <?php echo $book_author;?></h6>
                </div>
                <div class="card-body">
                  <p><?php echo $author_int;?></p>
            
                </div>

             
              </div>
                   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">

                Interested in review
            </button>

              
                          <!-- Content Row -->
                  <?php }




    ?>


</div>
<?php
include('includes/scripts.php');
include('includes/footer.php');
?>

<!-- /.container-fluid -->


