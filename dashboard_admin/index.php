
<?php
include 'includes/header.php';
?>
<body id="page-top">
     <?php
include 'includes/navbar.php';
?>
<?php

 global $connection;
  global $role;
  $user = $_SESSION['userLogged'];
  $sql = mysqli_query($connection, "SELECT * FROM user WHERE U_email='$user'");
  $res = mysqli_fetch_array($sql);
  $username=$res['U_username'];
  $role= $res['U_role'];


?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
          </div>

          <!-- Content Row -->
                       <?php

      if ($role === 'Admin'){
        ?>
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
              <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Posts</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
               <?php
               
            
                
                            $query = "SELECT P_id FROM post ORDER BY P_id";  
                            $query_run = mysqli_query($connection, $query);
                            $row = mysqli_num_rows($query_run);
                            echo '<h4> '.$row.'</h4>';
                ?>
          
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
            <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Reviewers</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
               <?php
               
            
                
                            $query = "SELECT R_id FROM reviewer ORDER BY R_id";  
                            $query_run = mysqli_query($connection, $query);
                            $row = mysqli_num_rows($query_run);
                            echo '<h4> '.$row.'</h4>';
                ?>
          
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
            <!-- Earnings (Monthly) Card Example -->
                      <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Authors</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
               <?php
               
            
                
                            $query = "SELECT A_id FROM author ORDER BY A_id";  
                            $query_run = mysqli_query($connection, $query);
                            $row = mysqli_num_rows($query_run);
                            echo '<h4> '.$row.'</h4>';
                ?>
          
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
                  <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Books</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
               <?php
               
            
                
                            $query = "SELECT B_id FROM book ORDER BY B_id";  
                            $query_run = mysqli_query($connection, $query);
                            $row = mysqli_num_rows($query_run);
                            echo '<h4> '.$row.'</h4>';
                ?>
          
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>

   
          </div>

          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">New Users</h6>
            
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-area">
                  <iframe src="https://www.seethestats.com/stats/20555/NewUsers_065e63a34_ifr.html" style="width:100%;height:100%;border:none;" scrolling="no" frameborder="0"></iframe>
                  </div>
                </div>
              </div>
            </div>

                        <div class="col-xl-4 col-lg-5">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">City Details</h6>
             
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-pie pt-4 pb-2">
                    <iframe src="https://www.seethestats.com/stats/20555/SessionsByCity_9bf2db82c_ifr.html" style="width:100%;height:100%;border:none;" scrolling="no" frameborder="0"></iframe>
                  </div>
                     <div class="mt-4 text-center small">
               
                  </div>

                </div>
              </div>
            </div>
          </div>

      <div class="row">

            <!-- Content Column -->
            <div class="col-lg-6 mb-4">

              <!-- Project Card Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Time Per Page</h6>
                </div>
                <div class="card-body">
                  <iframe src="https://www.seethestats.com/stats/20555/TimeOnPage_e0958a0ef_ifr.html" style="width:100%;height:100%;border:none;" scrolling="no" frameborder="0"></iframe>
                </div>
              </div>

              <!-- Color System -->
              <div class="row">
          
             
         
              <div class="col-lg-6 mb-4">
                   <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Country Data</h6>
                </div>
                <div class="card-body">
               <iframe src="https://www.seethestats.com/stats/20555/SessionsByCountry_cf641e4db_ifr.html" style="width:100%;height:100%;border:none;" scrolling="no" frameborder="0"></iframe>
                </div>
              </div>
              </div>
            </div>

            </div>

            <div class="col-lg-6 mb-4">

              <!-- Illustrations -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Users Data</h6>
                </div>
                <div class="card-body">
                 <iframe src="https://www.seethestats.com/stats/20555/Users_01589fad8_ifr.html" style="width:100%;height:100%;border:none;" scrolling="no" frameborder="0"></iframe>
                </div>
              </div>

              <!-- Approach -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Keywords</h6>
                </div>
                <div class="card-body">
                 <iframe src="https://www.seethestats.com/stats/20555/SessionsByKeyword_def546d0f_ifr.html" style="width:100%;height:100%;border:none;" scrolling="no" frameborder="0"></iframe>
                </div>
              </div>

            </div>
          </div>

        </div>




        <!-- /.container-fluid -->

      </div>
      <?php } ?>
      <?php
        if ($role === 'Reviewer'){
        ?>

               <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Welcome to Arcadian!!</h6>
                </div>
                <div class="card-body">
                  <p>We are honoured to have you as one of our reviewer. Start sharing your words with the readers from all around the world. If this is first time here, Please move to the "Help" section in the navbar to get started.</p>
          
                </div>

             
              </div>
                      <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-6 col-lg-6">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Your Posts</h6>
                
                </div>
                <!-- Card Body -->
                <div class="card-body">
               <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
   
    <th>Post Title</th>
 
    <th>Post Status</th>
    <th>Post Views</th>



  </thead>
  <tbody>
  <?php show_posts_d(); ?>
  </tbody>
            

          </table>
        </div>

                </div>
              </div>
            </div>

            <!-- Pie Chart -->
            <div class="col-xl-6 col-lg-6">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Latest Books</h6>
                
                </div>
                <!-- Card Body -->
                <div class="card-body">
                        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
   
    <th>Book Title</th>
 
    <th>View</th>
  



  </thead>
  <tbody>
  <?php show_book(); ?>
  </tbody>
            

          </table>
        </div>
                </div>
              </div>
            </div>
          </div>
           <?php } ?>
      <!-- End of Main Content -->

      <!-- Footer -->

      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>
   <?php
include 'includes/scripts.php';
?>


</body>

</html>
