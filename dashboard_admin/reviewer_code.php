<?php
session_start();



$server_name = "localhost";
$db_username = "u625807408_arcadian";
$db_password = "Carpediem31";
$db_name = "u625807408_db_contact";
$connection = mysqli_connect($server_name,$db_username,$db_password,$db_name);


if(isset($_POST['registerbtn']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $date = $_POST['date'];
    $usertype = $_POST['usertype'];
    $email_query = "SELECT * FROM reviewer WHERE R_email='$email' ";
    $email_query_run = mysqli_query($connection, $email_query);
    if(mysqli_num_rows($email_query_run) > 0)
    {
        $_SESSION['status'] = "Email Already Taken. Please Try Another one.";
        $_SESSION['status_code'] = "error";
        header('Location: reviewer.php');  
    }
    else{

  
      
            $query = "INSERT INTO reviewer (R_name,R_email,R_username,R_jdate,R_usertype) VALUES ('$name','$email','$username','$date','$usertype')";
            $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                // echo "Saved";
                $_SESSION['success'] = "Reviewer Profile Added";
                header('Location: reviewer.php');
            }
            else 
            {
                $_SESSION['status'] = "Reviewer Profile Not Added";
                header('Location: reviewer.php');  
            }
    }
    

}
if(isset($_POST['updatebtn']))
{
    $id = $_POST['edit_id'];
    $username = $_POST['edit_username'];
    $email = $_POST['edit_email'];
    $name = $_POST['edit_name'];
    $jdate = $_POST['edit_date'];
    $usertype_update= $_POST['edit_usertype'];
    $query = "UPDATE reviewer SET R_name='$name', R_email='$email', R_username='$username',R_jdate='$jdate',R_usertype='$usertype_update' WHERE R_id='$id' ";
    $query_run = mysqli_query($connection, $query);
    if($query_run)
    {
        $_SESSION['success'] = "Your Data is Updated";
        header('Location: reviewer.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT Updated";
        header('Location: reviewer.php'); 

    }

}
if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM reviewer WHERE R_id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Your Data is Deleted";
        header('Location: reviewer.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        header('Location: reviewer.php'); 
    }    
}


 


            
                
?>