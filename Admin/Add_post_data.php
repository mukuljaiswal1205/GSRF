<?php

include('db_connection.php');


$Title = $_POST["Title"];
$Description = $_POST["Description"];
$image = $_FILES['image']['name'];

echo $Title;
echo $Description;
echo $image;
 
$data_insert = "INSERT INTO News(title,content,Image) VALUES('$Title','$Description','$image')";
 
if(mysqli_query($con,$data_insert)){
    
	$Post_id=mysqli_insert_id($con);
    mkdir("../Post/".$Post_id);
	move_uploaded_file($_FILES['image']['tmp_name'],"../Post/$Post_id/$image");
    echo "<script type='text/javascript'>alert('successfully added!');window.location=\"index.php\"; </script>";
} else{
    
    echo "<script type='text/javascript'>alert('ERROR !! Please Check Again');window.location=\"index.php\"; </script>";
}

?>