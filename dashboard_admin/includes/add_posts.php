<?php
 $sql = "SELECT * FROM category";
 $res = mysqli_query($connection, $sql);

  $sql1 = "SELECT * FROM language";
 $res1 = mysqli_query($connection, $sql1);

?>
<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Add Post
            
    </h6>
  </div>

  <div class="card-body">
    <?php
     global $role;
       if($role !== "Admin"){
        echo "<p>Prepare a draft of the review. Your review will be published after our editor's approval.</p>";

       }
       ?>


 
    <form action="includes/functions.php" method="POST" enctype="multipart/form-data">
     <div class="form-group">
                <label> Post Title </label>
               <input type="text" name="title" placeholder="Post Title" class="form-control">
            </div>
            <div class="form-group">
                <label>Post Author</label>
                <input type="text" name="author" value="<?php echo $_SESSION['username'];?> "placeholder="Post Author" class="form-control">

                           </div>
            <div class="form-group">
                <label>Post Category</label>
                  <select class="form-control" name="category">
        <?php
          while ($row = mysqli_fetch_array($res)) {
            $cat_title = $row['C_title'];
            echo "<option value='$cat_title'>$cat_title</option>";
          }
         ?>

      </select>
            </div>
  

                <div class="form-group">
                <label>Post Content</label>
                  <textarea name="content" id="_Text" rows="8" cols="80" class="form-control"></textarea>
   <script type='text/javascript'>
    CKEDITOR.replace('_Text');
  </script>
                
            </div>
       <div class="form-group">
        <label for="">Book Language</label>
                     <select class="form-control" name="language">
        <?php
          while ($row = mysqli_fetch_array($res1)) {
            $lang_title = $row['L_title'];
            echo "<option value='$lang_title'>$lang_title</option>";
          }
         ?>

      </select>
    
      </div>
           <div class="form-group">
        <label for="">Post Status</label>
      <select class="form-control" name="status">
        <option value="draft">Draft</option>
        
      </select>
      </div>
       <div class="form-group">
        <label for="">Post Image</label>
        <input type="file" name="post_image"  class="form-control">
      </div>
     


           
            <a href="index.php" class="btn btn-danger"> CANCEL </a>
             <button type="submit" name="publish" value="Publish Post" class="btn btn-primary"> SUBMIT </button>
             </form>
   
         


  
</div>

</div>

<!-- /.container-fluid -->


