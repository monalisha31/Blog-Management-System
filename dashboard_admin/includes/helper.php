<?php
   function delete($table,$colName,$id)
 {  global $connection;
 	$query = mysqli_query($connection ,"DELETE FROM $table WHERE $colName =$id");
 	if ($query) {
 		return true;
 		
 	}
 	else{
 		return false;
 	}
 }

 function confirm($id){
 	global $connection;
 	 $query = mysqli_query($connection ,"SELECT Co_status FROM comment WHERE Co_id =$id");
     if(mysqli_num_rows($query)>0){
     	$result = mysqli_fetch_array($query);
     	$status = $result['Co_status'];
     	if ($status = 'Unapproved') {
     		$sql = mysqli_query($connection,"UPDATE comment SET Co_status = 'Approved' WHERE Co_id='$id'");
     	}else
      {
      	$sql = mysqli_query($connection,"UPDATE comment SET Co_status = 'Unapproved' WHERE Co_id='$id'");
      }
      return true;
     }
     else {
     	return false;
     }
 }
 function redirect($page = 'index.php'){
  header("Location: ".$page."");
 }
 ?>