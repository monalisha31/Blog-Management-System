<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
include('includes/helper.php'); 
if(isset($_GET['delete_user']) && $_GET['delete_user'] != ''){
  $dlt = $_GET['delete_user'];
  if(delete('user','U_id', $dlt)){
    header("Location: reviewer.php?source=");
  }
  else{
    echo "fail";
  }
}
if(isset($_GET['approve_user']) && $_GET['approve_user'] != ''){
  $app_id = $_GET['approve_user'];
  if(modifystatus1($app_id)){
    header("Location: reviewer.php?source=");
  }
  else{
    die("Failed");
  }
}



?>
<div class="container-fluid">

<!-- DataTales Example -->


<!-- DataTales Example -->


  


          <?php
            if (isset($_GET['source'])) {
                $source = $_GET['source'];

            switch ($source) {
          
            case 'edit':
                include "includes/edit_user.php";
                break;
              default:
                include "includes/view_reviewer.php";
                break;
            }

    }
        else{
              include "includes/view_reviewer.php";

            }
           ?>

    </div>
  </div>
</div>

</div>  
         






<?php
include('includes/scripts.php');

?>
