<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
include('includes/helper.php'); 
if(isset($_GET['delete_post']) && $_GET['delete_post'] != ''){
  $dlt = $_GET['delete_post'];
  if(delete('post','P_id', $dlt)){
    header("Location: post.php?source=");
  }
  else{
    echo "fail";
  }
}
if(isset($_GET['approve_post']) && $_GET['approve_post'] != ''){
  $app_id = $_GET['approve_post'];
  if(modifystatus($app_id)){
    header("Location: post.php?source=");
  }
  else{
    die("Failed");
  }
}

if(isset($_GET['unapprove_post']) && $_GET['unapprove_post'] != ''){
  $un_app_id = $_GET['unapprove_post'];
  if(modifystatus($un_app_id)){
    header("Location: post.php?source=");
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
              case 'add_new':
                include "includes/add_posts.php";
                break;
            case 'edit':
                include "includes/edit_posts.php";
                break;
              default:
                include "includes/view_posts.php";
                break;
            }

    }
        else{
              include "includes/view_posts.php";

            }
           ?>

    </div>
  </div>
</div>

</div>  
         






<?php
include('includes/scripts.php');

?>
