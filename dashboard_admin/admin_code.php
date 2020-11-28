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
    $email_query = "SELECT * FROM admin WHERE email='$email' ";
    $email_query_run = mysqli_query($connection, $email_query);
    if(mysqli_num_rows($email_query_run) > 0)
    {
        $_SESSION['status'] = "Email Already Taken. Please Try Another one.";
        $_SESSION['status_code'] = "error";
        header('Location: admin.php');  
    }
    else{

  
      
            $query = "INSERT INTO admin (name,email,username,Jdate,usertype) VALUES ('$name','$email','$username','$date','$usertype')";
            $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                // echo "Saved";
                $_SESSION['success'] = "Admin Profile Added";
                header('Location: admin.php');
            }
            else 
            {
                $_SESSION['status'] = "Admin Profile Not Added";
                header('Location: admin.php');  
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
    $query = "UPDATE admin SET name='$name', email='$email', username='$username',Jdate='$jdate',usertype='$usertype_update' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);
    if($query_run)
    {
        $_SESSION['success'] = "Your Data is Updated";
        header('Location: admin.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT Updated";
        header('Location: admin.php'); 

    }

}
if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM admin WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Your Data is Deleted";
        header('Location: admin.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        header('Location: admin.php'); 
    }    
}



 


            
                
?>