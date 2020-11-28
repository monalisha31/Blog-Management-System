<?php

include('includes/header.php'); 
include('includes/navbar.php'); 
?>
<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Add Users
            
    </h6>
  </div>

  <div class="card-body">
   

 
    <form action="validator/validate.php" method="POST" id="form">
      <input type="hidden" name="edit_id">
     <div class="form-group">
                <label> Username </label>
                <input type="text" name="username"  class="form-control" placeholder="Enter Username">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control checking_email" placeholder="Enter Email">
                <small class="error_email" style="color: red;"></small>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password"  class="form-control" placeholder="Enter Password">
            </div>
           

                <div class="form-group">
                <label>Usertype</label>
               <select name="role" id="role" class = "form-control">
                 <option value="Admin">Admin</option>
                 <option value="Editor">Editor</option>
               </select>
            </div>

           
            <a href="author.php" class="btn btn-danger"> CANCEL </a>
             <input type="submit" name="submit" class="btn btn-primary"> </input>
             </form>

         


  
</div>

</div>
<!-- /.container-fluid -->



<?php
include('includes/scripts.php');
include('includes/footer.php');
?>
