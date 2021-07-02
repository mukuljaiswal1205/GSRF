<?php 

include('db_connection.php');


$id=$_GET["id"];

$del_query="DELETE FROM News WHERE id=".$id."";


if(mysqli_query($con,$del_query))
{
		  echo "<script type='text/javascript'>alert('Deleted successfully!');window.location=\"index.php\";</script>";
} 
else
{
     echo "<script type='text/javascript'>alert('ERROR !! Please Check Again');window.location=\"index.php\";</script>";
}

?>