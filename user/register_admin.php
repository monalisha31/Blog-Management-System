
<?php
include('includes/header.php'); 

?>
<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
              <form class="user" action="includes/form_handler/create.php" method="post" role="form" autocomplete="off">
                <div class="form-group">
    <label>Username</label>
    <input type="text" name="username" placeholder="Username" class="form-control">
  </div>
  <div class="form-group">
    <label>Email</label>
    <input type="email" name="email" placeholder="E-Mail" class="form-control">
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="password" name="pwd" placeholder="Password" placeholder="Password" class="form-control">
  </div>
  <div class="form-group">
    <input type="submit" name="create_submit" value="Continue" class="btn btn-primary btn-user btn-block">
  </div>
              
              

              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="forgot-password.html">Forgot Password?</a>
              </div>
              <div class="text-center">
                <a class="small" href="login.html">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
<?php
include('includes/scripts.php');

?>


</body>

</html>
