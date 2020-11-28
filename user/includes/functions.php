<?php include "db.php"; ?>
<?php
  include "db.php";
  error_reporting(E_ALL);
ini_set('display_errors', 1);
  
  function add_category(){
  global $connection;

  if (isset($_POST['cat_add'])) {
      if (empty($_POST['cat_title'])) {
        header("Location: ../category.php?Field_cannot_be_empty");
      }else{
        $cat_title = $_POST['cat_title'];
        $query = "INSERT INTO category(C_title)VALUES('$cat_title')";
        $result = mysqli_query($connection, $query);

        if (!$result) {
          die("Could not send data " . mysqli_error($connection));
        }
        else{
          header("Location: ../category.php?category_added");
        }

      }
  }

}
add_category();
if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM category WHERE C_id='$id' ";
    $query_run = mysqli_query($connection, $query);
       if (!$query_run) {
          die("Could not send data " . mysqli_error($connection));
        }
        else{
          header("Location: ../category.php?category_deleted");
        }

  
}
function add_post(){
  global $connection;
  if (isset($_POST['publish'])) {
    $post_title = $_POST['title'];
    $post_author = $_POST['author'];
    $post_category = $_POST['category'];
    $post_category_id = $_POST['category_id'];
    $post_content = mysqli_real_escape_string($connection,$_POST['content']);
    $post_tags = $_POST['tags'];
    $post_status = $_POST['status'];

    $date = date("l d F Y");
    $post_views = 0;
    $post_comment_count = 0;

    if (isset($_FILES['post_image'])) {
      $dir = "../images/";
      $target_file = $dir.basename($_FILES['post_image']['name']);
      if (move_uploaded_file($_FILES['post_image']['tmp_name'],$target_file)) {
        echo "Image was uploaded";
      }else{
        echo "Something went wrong while uploading image";
      }
    }
    $query = "INSERT INTO post (P_title,P_author,P_category,P_category_id,P_content,P_image,P_date,P_comment,P_view,P_tag,P_status,P_track) VALUES('$post_title','$post_author','$post_category','$post_category_id','$post_content','$target_file','$date','$post_comment_count','$post_views','$post_tags','$post_status','0')";
    $result = mysqli_query($connection, $query);
    if (!$result) {
      die("Could not send data " . mysqli_error($connection));
      header("Location: ../post.php?source=add_new");
    }else{
      header("Location: ../index.php");
    }
  }
}
  add_post();
  function show_posts(){
  global $connection;
  $query = "SELECT * FROM post";
  $result = mysqli_query($connection, $query);

  while ($row = mysqli_fetch_assoc($result)) {
    $post_id = $row['P_id'];
    $post_title = $row['P_title'];
    $post_author = $row['P_author'];
    $post_category = $row['P_category'];
    $post_category_id = $row['P_category_id'];
    $post_content = $row['P_content'];
    $post_tags = $row['P_tag'];
    $post_status = $row['P_status'];
    $post_image = $row['P_image'];
    $date = $row['P_date'];
    $post_views = $row['P_view'];
    $post_comment_count = $row['P_comment'];

    echo "<tr>";
    echo "<td>{$post_id}</td>";
    echo "<td>{$post_title}</td>";
    echo "<td>{$post_author}</td>";
    echo "<td>{$post_category}</td>";
    echo "<td>{$post_status}</td>";
    echo "<td><img src='images/{$post_image}' width='50px'></td>";
    echo "<td>{$post_content}</td>";
    echo "<td>{$date}</td>";
    echo "<td>{$post_tags}</td>";
    echo "<td>{$post_comment_count}</td>";
    echo "<td>{$post_views}</td>";
    echo "<td><a href='posts.php?approve_post=$post_id'>Approve</a></td>";
    echo "<td><a href='posts.php?unapprove_post=$post_id'>Unapprove</a></td>";
    echo "<td><a href='posts.php?edit_post=$post_id'>Edit</a></td>";
    echo "<td><a href='posts.php?delete_post=$post_id'>Delete</a></td>";
    echo "</tr>";

  }
}
?>