<?php 
include('db_connection.php');
$password = $_POST["password"];
$confirm_password = $_POST["confirm_password"];
session_start();


if($password == $confirm_password)
{
      $data_insert = "UPDATE user SET Password = '".$password."'  WHERE id = '".$_SESSION['id']."'";


    if(mysqli_query($con,$data_insert)){
  
    echo "<script type='text/javascript'>alert('successfully Updated!1');window.location=\"index.php\"; </script>";
    } else{
  
    echo "<script type='text/javascript'>alert('ERROR !! Please Check Again1');window.location=\"index.php\"; </script>";
   }
      
}
else
{
     echo "<script type='text/javascript'>alert('Password did not match');window.location=\"index.php\"; </script>";
}

?>



