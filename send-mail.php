<?php

    ini_set( 'display_errors', 1 );   
    error_reporting( E_ALL );    
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $messages = $_POST['message'];
    
    $sender_domain = "febridk.id";
    $site_name = "Vcard Febri Dwi Kurniawan";
    $from = $email;    
    $to = "email@febridk.id";    
    $subject = "Bussines";    
    $message = $messages;
    
    
	$headers = "From: " . $site_name . ' <' . $sender_domain . '> ' . "\r\n";
	$headers .= "Reply-To: " . $name . ' <' . $email . '> ' . "\r\n";
    $mail_result = mail($to,$subject, $message, $headers);    
    
	if ( $mail_result == true ){
        echo 'success';
	}else{
        echo 'unsuccess';
    }

?>