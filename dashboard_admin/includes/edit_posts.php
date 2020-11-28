<?php
 $sql = "SELECT * FROM category";
 $res = mysqli_query($connection, $sql);
  $sql1 = "SELECT * FROM language";
 $res1 = mysqli_query($connection, $sql1);

 if(isset($_GET['edit_post']) && $_GET['edit_post'] != ''){
  $edit_id = $_GET['edit_post'];
  $query = mysqli_query($connection , "SELECT * FROM post WHERE P_id=$edit_id");
  if (mysqli_num_rows($query) > 0) {
    $data = mysqli_fetch_array($query);
    $title = $data['P_title'];
    $author = $data['P_author'];
    $category = $data['P_category'];
    $content = $data['P_content'];
    $lang = $data['P_lang'];
    $status = $data['P_status'];
    $image = $data['P_image'];

  }
}
  else{
    die("Failed");
 }


?>
<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Edit Post
            
    </h6>
  </div>

  <div class="card-body">


 
    <form action="includes/functions.php" method="POST" enctype="multipart/form-data">
     <div class="form-group">
                <label> Post Title </label>
               <input type="text" name="title" placeholder="Post Title" class="form-control" value = "<?php echo $title; ?>">
            </div>
            <div class="form-group">
                <label>Post Author</label>
                <input type="text" name="author"  placeholder="Post Author" class="form-control" value = "<?php echo $author; ?>">

                           </div>
            <div class="form-group">
                <label>Post Category</label>
                  <select class="form-control" name="category">
                    <option value = "<?php echo $category; ?>"><?php echo $category; ?></option>
        <?php
          while ($row = mysqli_fetch_array($res)) {
            $cat_title = $row['C_title'];
            echo "<option value='$cat_title'>$cat_title</option>";
          }
         ?>

      </select>
            </div>
                        <div class="form-group">
                <label>Book Language</label>
                  <select class="form-control" name="language">
                    <option><?php echo $lang; ?></option>
        <?php
          while ($row1 = mysqli_fetch_array($res1)) {
            $lang_title = $row1['L_title'];
            echo "<option>$lang_title</option>";
          }
         ?>

      </select>
            </div>
  

                <div class="form-group">
                <label>Post Content</label>
                  <textarea name="content" id="_Text" rows="8" cols="80" class="form-control"><?php echo $content; ?></textarea>
   <script type='text/javascript'>
    CKEDITOR.replace('_Text');
  </script>
                
            </div>


       <div class="form-group">
        <label for="">Post Image</label>
        
        <br>
        <input type="text" name="image" value="images/<?php echo $image; ?>" style = "display: none;">
        <input type="text" name="editID" value="<?php echo $edit_id; ?>" style = "display: none;">
        <img src="images/<?php echo $image; ?>" style ="width: 150px; height: 150px; border-radius: 10px;">
      </div>
     


            <div class="form-group">
        <input type="submit" name="modify_post" value="Modify Post"  class="btn btn-primary">
      </div>
   
         


  
</div>

</div>

<!-- /.container-fluid -->


