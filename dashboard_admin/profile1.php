<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>



        <div class="container-fluid">

<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">
        
            
    </h6>
     <p class="alert alert-info col-md-12">To update your profile picture and password go to the <a href="settings.php"><b>settings</b></a> page</p>
  </div>
              <div class="card-body">
    
               
                    <img src="users/profile_pics/defaults/head_1.png" alt="" style="width: 150px; height: 150px; border-radius: 100%;">
                    <form action="" method="post">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" name="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="role">Role</label>
                                <input type="text" name="role" class="form-control" disabled>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="update" class="btn btn-success" value="Update your profile">
                            </div>
                        </div>
                    </form>
                </div>
            

            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->



</body>

</html>