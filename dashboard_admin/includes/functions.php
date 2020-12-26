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
  
function add_language(){
  global $connection;

  if (isset($_POST['lang_add'])) {
      if (empty($_POST['lang_title'])) {
        header("Location: ../language.php");
      }else{
        $lang_title = $_POST['lang_title'];
        $query = "INSERT INTO language(L_title)VALUES('$lang_title')";
        $result = mysqli_query($connection, $query);

        if (!$result) {
          die("Could not send data " . mysqli_error($connection));
        }
        else{
          header("Location: ../language.php");
        }

      }
  }

}
add_language();

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
if(isset($_POST['delete_lang_btn']))
{
    $id = $_POST['delete_lang_id'];

    $query = "DELETE FROM language WHERE L_id='$id' ";
    $query_run = mysqli_query($connection, $query);
       if (!$query_run) {
          die("Could not send data " . mysqli_error($connection));
        }
        else{
          header("Location: ../language.php?language_deleted");
        }

  
}
function add_post(){
  global $connection;

  if (isset($_POST['publish'])) {
    $post_title = $_POST['title'];
    $post_author = $_POST['author'];
    $post_category = $_POST['category'];
    $sql = mysqli_query($connection,"SELECT C_id FROM category WHERE C_title='$post_category'");
    $row = mysqli_fetch_assoc($sql);
    $post_category_id = $row['C_id'];
    $post_content = mysqli_real_escape_string($connection,$_POST['content']);
    $post_lang = $_POST['language'];
    $sql1 = mysqli_query($connection,"SELECT L_id FROM language WHERE L_title='$post_lang'");
    $row1 = mysqli_fetch_assoc($sql1);
    $post_language_id = $row1['L_id'];
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
    $query = "INSERT INTO post (P_title,P_author,P_category,P_category_id,P_content,P_image,P_date,P_comment,P_view,P_lang,P_lang_id,P_status,P_track) VALUES('$post_title','$post_author','$post_category','$post_category_id','$post_content','$target_file','$date','$post_comment_count','$post_views','$post_lang','$post_language_id','$post_status','0')";
    $result = mysqli_query($connection, $query);
    if (!$result) {
      die("Could not send data " . mysqli_error($connection));
      header("Location: ../post.php?source=add_new");
    }else{
      header("Location: ../post.php?souce=");
    }
  }
}
  add_post();
  function show_posts(){
  global $connection;
  global $role;
 if(isset($_GET['page'])){
        $page_id = $_GET['page'];
      }
      else{
        $page_id = 1;
      }
  $number = 10;
  $query1 = "SELECT * FROM post";
$result1 = mysqli_query($connection, $query1);
$all_post = mysqli_num_rows($result1);
$total = ceil($all_post / $number);
$start  = ($page_id - 1)* $number;
 

  $user = $_SESSION['userLogged'];
  $sql = mysqli_query($connection, "SELECT * FROM user WHERE U_email='$user'");
  $res = mysqli_fetch_array($sql);
  $username=$res['U_username'];
  $role= $res['U_role'];
   $query2 = "SELECT * FROM post WHERE P_author='$username'";
$result2 = mysqli_query($connection, $query2);
$all_post1 = mysqli_num_rows($result2);
$total1 = ceil($all_post1 / $number);
$start1  = ($page_id - 1)* $number;
  if ($role === 'Admin') {
     $query = "SELECT * FROM post LIMIT $start , $number ";
    
  }
  else
  {
    $query ="SELECT * FROM post WHERE P_author='$username' LIMIT $start1 , $number";
  }

  $result = mysqli_query($connection, $query);

  while ($row = mysqli_fetch_assoc($result)) {
    $post_id = $row['P_id'];
    $post_title = $row['P_title'];
    $post_author = $row['P_author'];
    $post_category = $row['P_category'];
    $post_category_id = $row['P_category_id'];
    $post_content = substr($row['P_content'], 0,50);
    $post_lang = $row['P_lang'];
    $post_status = $row['P_status'];
    $post_image = $row['P_image'];
    $date = $row['P_date'];
    $post_views = $row['post_views'];


    echo "<tr>";
   
    echo "<td>{$post_title}</td>";
    echo "<td>{$post_status}</td>";
    echo "<td>{$post_views}</td>";
    
    if($role === "Admin"){

    echo "<td><a href='post.php?approve_post=$post_id' class='btn btn-primary'>Approve</a></td>";}
    echo "<td><a href='post.php?source=edit&edit_post=$post_id' class='btn btn-primary'>View & Edit</a></td>";
    echo "<td><a href='post.php?delete_post=$post_id' class='btn btn-danger'>Delete</a></td>";
  
    echo "</tr>";

  }
}
  function show_reviewer(){
  global $connection;
  global $role;
  $user = $_SESSION['userLogged'];
  $sql = mysqli_query($connection, "SELECT * FROM user WHERE U_email='$user'");
  $res = mysqli_fetch_array($sql);
  $username=$res['U_username'];
  $role= $res['U_role'];
  if ($role === 'Admin') {
     $query = "SELECT * FROM user WHERE U_role='Reviewer'";
    
  }
  else
  {
    $query ="SELECT * FROM user WHERE U_role='Reviewer'";
  }

  $result = mysqli_query($connection, $query);

  while ($row = mysqli_fetch_assoc($result)) {
    $user_id = $row['U_id'];
    $user_title = $row['U_username'];
   
  
    $user_status = $row['U_status'];
 


    echo "<tr>";
   
    echo "<td>{$user_title}</td>";
    echo "<td>{$user_status}</td>";
    
    if($role === "Admin"){

    echo "<td><a href='reviewer.php?approve_user=$user_id' class='btn btn-primary'>Approve</a></td>";}
    echo "<td><a href='reviewer.php?source=edit&edit_user=$user_id' class='btn btn-primary'>View</a></td>";
    echo "<td><a href='reviewer.php?delete_user=$user_id' class='btn btn-danger'>Delete</a></td>";
  
    echo "</tr>";

  }
}
function modifystatus($id){
  global $connection;
  $query = mysqli_query($connection , "SELECT P_status FROM post WHERE P_id=$id");
  if (mysqli_num_rows($query) > 0) {
    $result = mysqli_fetch_array($query);
    $status = $result['P_status'];

    if($status = "draft"){
     $query = mysqli_query($connection , "UPDATE post SET P_status = 'published' WHERE P_id=$id");
      
    }else{

     $query = mysqli_query($connection , "UPDATE post SET P_status = 'draft' WHERE P_id=$id");
      
    }
    return true;
  }
  else{
    return false;
  }
}
function modifystatus1($id){
  global $connection;
  $query = mysqli_query($connection , "SELECT U_status FROM user WHERE U_id=$id");
  if (mysqli_num_rows($query) > 0) {
    $result = mysqli_fetch_array($query);
    $status = $result['U_status'];

    if($status = "Not Verified"){
     $query = mysqli_query($connection , "UPDATE user SET U_status = 'Verified' WHERE U_id=$id");
      
    }else{

     $query = mysqli_query($connection , "UPDATE user SET U_status = 'Not Verified' WHERE U_id=$id");
      
    }
    return true;
  }
  else{
    return false;
  }
}
if(isset($_POST['modify_post'])){
  $eid = $_POST['editID'];
  $title = $_POST['title'];
  $author = $_POST['author'];
  $category = $_POST['category'];
  $content = $_POST['content'];
  $language = $_POST['language'];
  $status = $_POST['status'];
  $sql = mysqli_query($connection,"SELECT C_id FROM category WHERE C_title='$category'");
  $record = mysqli_fetch_array($sql);
  $post_cat_id = $record['C_id'];

  $query  = mysqli_query($connection, "UPDATE post set P_title ='$title',P_author ='$author' , P_category ='$category' , P_category_id = '$post_cat_id',P_content ='$content',P_status ='$status' , P_lang ='$language' WHERE P_id = '$eid'");
  if ($query) {
    header("Location: ../post.php");
    # code...
  }
}
  function show_posts_d(){
  global $connection;
  global $role;
  $user = $_SESSION['userLogged'];
  $sql = mysqli_query($connection, "SELECT * FROM user WHERE U_email='$user'");
  $res = mysqli_fetch_array($sql);
  $username=$res['U_username'];
  $role= $res['U_role'];
  if ($role === 'Admin') {
     $query = "SELECT * FROM post";
    
  }
  else
  {
    $query ="SELECT * FROM post WHERE P_author='$username' ORDER BY P_id DESC LIMIT 5";
  }

  $result = mysqli_query($connection, $query);

  while ($row = mysqli_fetch_assoc($result)) {
    $post_id = $row['P_id'];
    $post_title = $row['P_title'];
    $post_author = $row['P_author'];
    $post_category = $row['P_category'];
    $post_category_id = $row['P_category_id'];
    $post_content = substr($row['P_content'], 0,50);
    $post_lang = $row['P_lang'];
    $post_status = $row['P_status'];
    $post_image = $row['P_image'];
    $date = $row['P_date'];
    $post_views = $row['post_views'];


    echo "<tr>";
   
    echo "<td>{$post_title}</td>";
    echo "<td>{$post_status}</td>";
    echo "<td>{$post_views}</td>";
    

    echo "</tr>";

  }
}
  function show_book(){
  global $connection;
  global $role;
  $user = $_SESSION['userLogged'];
  $sql = mysqli_query($connection, "SELECT * FROM user WHERE U_email='$user'");
  $res = mysqli_fetch_array($sql);
  $username=$res['U_username'];
  $role= $res['U_role'];
 
     $query = "SELECT * FROM book ORDER BY B_id DESC";
$result = mysqli_query($connection, $query);

while($row = mysqli_fetch_assoc($result)){
  $book_id = $row['B_id'];
    $book_title = $row['B_name'];
    $book_author = $row['B_author'];
    $book_category = $row['B_genre'];
    $book_image = $row['B_image'];
    $book_intro = $row['B_intro'];

    echo "<tr>";
   
    echo "<td>{$book_title}</td>";
    echo "<td><a href='book_v.php?book=$book_id' class='btn btn-primary'>View</a></td>";
    
    

    echo "</tr>";

  }
}

?>