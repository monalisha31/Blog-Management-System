<?php

 global $connection;
  global $role;
  $user = $_SESSION['userLogged'];
  $sql = mysqli_query($connection, "SELECT * FROM user WHERE U_email='$user'");
  $res = mysqli_fetch_array($sql);
  $username=$res['U_username'];
  $role= $res['U_role'];


?>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
        </div>
        <div class="sidebar-brand-text mx-3">The Arcadian</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
    
          <span> <?php echo $role; ?></span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Dashboard
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <?php

      if ($role === 'Admin'){
        ?>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                  <span>Users</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            
            <a class="collapse-item" href="author.php">Authors</a>
            <a class="collapse-item" href="reviewer.php?source=">Reviewers</a>
            <a class="collapse-item" href="admin.php">Admins</a>
          </div>
        </div>
      </li>
    <?php } ?>

      <!-- Nav Item - Utilities Collapse Menu -->
          <?php

      if ($role !== 'Admin'){
        ?>

              <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          
          <span>Posts</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
                     <a class="collapse-item" href="post.php?source=add_new"">Add New Post</a>
            <a class="collapse-item" href="post.php?source=">All Posts</a>
          
          </div>
        </div>
      </li>
      <?php } ?>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
       
          <span>Features</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
             <?php

      if ($role === 'Admin'){
        ?>

            
            <a class="collapse-item" href="category.php">Add Category</a>
            <a class="collapse-item" href="comment.php">Publish Comments</a>
            <a class="collapse-item" href="language.php">Add Language</a>
            <a class="collapse-item" href="contact_d.php">Contact Requests</a>
            <a class="collapse-item" href="subscribe_d.php">Subscribe Requests</a>
            <a class="collapse-item" href="review_d.php">Review Requests</a>


            <?php } ?>
                        <?php

      if ($role === 'Reviewer'){
        ?>


            <a class="collapse-item" href="comment.php">View Comments</a>
            <a class="collapse-item" href="suggest.php">Suggestion Box</a>

            <?php } ?>



          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

  
      <!-- Nav Item - Pages Collapse Menu -->
               <?php

      if ($role === 'Admin'){
        ?>

          <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          
          <span>Posts</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
                     <a class="collapse-item" href="post.php?source=add_new">Add New Post</a>
            <a class="collapse-item" href="post.php?source=">All Posts</a>
          
          </div>
        </div>
      </li>
      <?php } ?>




      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="book_d.php">
                <span>Books to Review</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="author_d.php">
         
          <span>Author Interview</span></a>
      </li>
         <li class="nav-item">
        <a class="nav-link" href="profile.php">
      
          <span>Profile</span></a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="https://the-arcadian.gitbook.io/getting-started-with-the-arcadian/">
      
          <span>Getting Started</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
               <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 "  method="post">
          
             
              
              <a href="../index.php">  <button class="btn btn-primary" type="button">
                                    
                  Visit Website

            
              
            </button></a>
        
              
              
          </form>
 


          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->


            <!-- Nav Item - Messages -->
           

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
     
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $username; ?></span>
                <img class="img-profile rounded-circle" src="<?php echo $res['U_profile_pic']; ?>">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="profile.php">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="setting.php">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="post.php?source=">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Your Reviews
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="index.php?logout">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
