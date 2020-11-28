
<?php
include 'includes/header.php';
?>
<body id="page-top">
     <?php
include 'includes/navbar.php';
?>
<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Your Suggestion
            
    </h6>
    <br>
    <p>If you have a complaint or a suggestion regarding the dashboard. Please feel free to tell us.</p>
  </div>

  <div class="card-body">


 
    <form action="includes/contact.php" method="POST" enctype="multipart/form-data">
     <div class="form-group">
                <label> Your Name </label>
               <input type="text" name="cName"  placeholder="Your Name*" class="form-control">
            </div>
            <div class="form-group">
                <label>Your Email Address</label>
                <input type="text" name="cEmail"   placeholder="Your Email*" class="form-control">

                           </div>
                  <div class="form-group">
                    <label>Your Suggestion</label>
                        <textarea name="cMessage"  class="form-control" placeholder="Your Message*"></textarea>
                        </div>





     


            <div class="form-group">
        <input type="submit" name="contact_submit" value="Submit"  class="btn btn-primary">
      </div>
   
         


  
</div>

</div>

<!-- /.container-fluid -->
   <?php
include 'includes/scripts.php';
?>


</body>

</html>


