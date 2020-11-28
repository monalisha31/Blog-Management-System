<?php

include('includes/header.php'); 
include('includes/navbar.php'); 
?>
<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Add Language
            
    </h6>
  </div>

  <div class="card-body">


 
  	<form action="includes/functions.php" method="POST">
  		<input type="hidden" name="edit_id" value="<?php echo $row['L_id'] ?>">
  	 <div class="form-group">
                <label> Language Name </label>
                <input type="text" name="lang_title"  class="form-control" placeholder="Enter Language">
            </div>
         
      
       

           
            <a href="language.php" class="btn btn-danger"> CANCEL </a>
             <button type="submit" name="lang_add" class="btn btn-primary"> ADD </button>
             </form>
  
         


  
</div>

</div>
<!-- /.container-fluid -->


<?php
include('includes/scripts.php');
include('includes/footer.php');
?>
