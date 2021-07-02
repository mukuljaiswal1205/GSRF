<?php

include('db_connection.php');


$Title = $_POST["Title"];
$Description = $_POST["Description"];
$image = $_FILES['image']['name'];
$ID = $_POST['ID'];


if($_FILES['image']['size'] > 0)
{
    $data_insert = "UPDATE News SET title = '".$Title."', content = '".$Description."',Image = '".$image."'   WHERE id = '".$ID."'";


    if(mysqli_query($con,$data_insert)){
  
 
 
	move_uploaded_file($_FILES['image']['tmp_name'],"../Post/$ID/$image");
    echo "<script type='text/javascript'>alert('successfully Updated!1');  </script>";
    } else{
  
    echo "<script type='text/javascript'>alert('ERROR !! Please Check Again1');window.location=\"index.php\";  </script>";
}
}
else
{
    $data_insert = "UPDATE News SET title = '".$Title."', content = '".$Description."' Where id = '".$ID."'";

     if(mysqli_query($con,$data_insert)){
  
 
   

    echo "<script type='text/javascript'>alert('successfully Updated!2');window.location=\"index.php\";  </script>";
    } else{
  
    echo "<script type='text/javascript'>alert('ERROR !! Please Check Again2');window.location=\"index.php\";  </script>";
}
}

?>

