<?php
 $sql = "SELECT * FROM category";
 $res = mysqli_query($connection, $sql);

?>
<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Add Post
            
    </h6>
  </div>

  <div class="card-body">


 
    <form action="includes/functions.php" method="POST" enctype="multipart/form-data">
     <div class="form-group">
                <label> Post Title </label>
               <input type="text" name="title" placeholder="Post Title" class="form-control">
            </div>
            <div class="form-group">
                <label>Post Author</label>
                <input type="text" name="author" placeholder="Post Author" class="form-control">

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
                <label>Post Category ID</label>
                   <select class="form-control" name="category_id">
        <?php
        $sql = "SELECT * FROM category";
        $res = mysqli_query($connection, $sql);
          while ($row = mysqli_fetch_array($res)) {
            $cat_title = $row['C_title'];
              $cat_id = $row['C_id'];
            echo "<option value='$cat_id'>$cat_id - $cat_title</option>";
          }
         ?>
      </select>
            </div>

                <div class="form-group">
                <label>Post Content</label>
                <textarea name="content" rows="8" cols="80" class="form-control"></textarea>
            </div>
       <div class="form-group">
        <label for="">Post Tags</label>
        <input type="text" name="tags" placeholder="Seperate tags with a comma (,)" class="form-control">
      </div>
           <div class="form-group">
        <label for="">Post Status</label>
      <select class="form-control" name="status">
        <option value="draft">Draft</option>
        <option value="published">Published</option>
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


