<?php

include('db_connection.php');

$Title = $_POST["Title"];
$Description = $_POST["Description"];
 
$ID = $_POST['ID'];


 
 
    $data_insert = "UPDATE Pages SET Title = '".$Title."', Description = '".$Description."'  WHERE Id = '".$ID."'";


    if(mysqli_query($con,$data_insert)){
   
    echo "<script type='text/javascript'>alert('successfully Updated!1'); window.location=\"All_Pages.php\"; </script>";
    } else{
  
    echo "<script type='text/javascript'>alert('ERROR !! Please Check Again1');window.location=\"index.php\";  </script>";
    }
 
 
 

?>

