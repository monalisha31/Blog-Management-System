<?php
session_start();
include('includes/header.php'); 
include('includes/navbar.php'); 
?>
<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Add Category
            
    </h6>
  </div>

  <div class="card-body">


 
  	<form action="includes/functions.php" method="POST">
  		<input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>">
  	 <div class="form-group">
                <label> Category Name </label>
                <input type="text" name="cat_title"  class="form-control" placeholder="Enter Category">
            </div>
         
      
       

           
            <a href="index.php" class="btn btn-danger"> CANCEL </a>
             <button type="submit" name="cat_add" class="btn btn-primary"> ADD </button>
             </form>
  
         


  
</div>

</div>
<!-- /.container-fluid -->


<?php
include('includes/scripts.php');
include('includes/footer.php');
?>
