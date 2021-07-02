<?PHP 
session_start();
if(isset($_SESSION['id']))
{
      unset($_SESSION['id']);
      
       echo "<script type='text/javascript'>alert('Successfull Logout!');window.location=\"login.php\";</script>";
}



?>