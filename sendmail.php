<?php

    $UserName=$_POST['form_name'];
    $Email=$_POST['form_email'];
    $Subject=$_POST['form_subject'];
    $Msg=$_POST['form_message'];
    
    $toEmail="mishrasudhanshu0786@gmail.com";
    $mailHeaders = "From: " . $UserName . "<". $Email .">\r\n";
    if(mail($toEmail, $Subject, $Msg, $mailHeaders)) 
    {
        $message = "Your contact information is received successfully.";
        $type = "success";
        

    }


?>

