<?php

 include('db_connection.php');


$Title = $_POST["Title"];
$Description = $_POST["Description"];
 

echo $Title;
echo $Description;
 
 
$data_insert = "INSERT INTO Pages(Title,Description) VALUES('$Title','$Description')";
 
if(mysqli_query($con,$data_insert)){
    
    echo "<script type='text/javascript'>alert('successfully added!');window.location=\"All_Pages.php\"; </script>";
} else{
    
    echo "<script type='text/javascript'>alert('ERROR !! Please Check Again');window.location=\"All_Pages.php\"; </script>";
}

?>