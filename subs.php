<?php
 
  $to = 'winsfolio@gmail.com' . "\r\n";
  $subject = 'Subscribtion Request From webite';
  $email = $_POST['Email_Address']; 
   $headers .= "Reply-To: $name <$email>\r\n"; 
    $headers .= "Return-Path: The Sender <$email>\r\n"; 
    $headers .= "From: $email" ."\r\n" .
    $headers .= "webite Get A Quote\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n";
    $headers .= "X-Priority: 3\r\n";
    $headers .= "X-Mailer: PHP". phpversion() ."\r\n" ;


  $message = "************************************************** \r\n" .
  	         "Subscribtion Request from webite!  \r\n" .
             "************************************************** \r\n" .	

  	        "E-mail: " . $email ."\r\n";   


	$mail = mail($to, $subject, $message, $headers); 

 ?>