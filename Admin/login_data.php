<?php 
include('db_connection.php');
$email=$_POST["email"];
$password=$_POST["password"];


 $data_insert= "SELECT * FROM user where User_name='".$email."' && Password='".$password."'";
 $query=mysqli_query($con,$data_insert);
 $data=mysqli_fetch_assoc($query);
if(($data)==true){
	session_start();
	$_SESSION['id']= $data['id'];
	$_SESSION['type']= "admin";
	
		
          echo "<script type='text/javascript'>alert('Successfully login!');window.location=\"index.php\";</script>";
	

	
} else{
    echo "<script type='text/javascript'>alert(' login Fa!');window.location=\"login.php\";</script>";
}

?>



