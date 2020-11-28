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
    


  
      
            $query = "INSERT INTO review (R_book,R_email,R_name) VALUES ('$name','$email','$username')";
            $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                // echo "Saved";
                $_SESSION['success'] = "Your Request will be reviewed";
                header('Location: book_d.php');
            }
            else 
            {
                $_SESSION['status'] = "Please submit the form again";
                header('Location: index.php');  
            }
    
    

}



 


            
                
?>