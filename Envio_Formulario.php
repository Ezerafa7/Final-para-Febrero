<?php
 
 
  if(!empty($_POST["send"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
 
    // Recipient email
    $to = "ezerafa2002@gmail.com";
     
    // Build email header
    $header = "From: " . $name . "<". $email .">\r\n";
 
    // Send email
    if(mail($toMail, $subject, $message, $header)) {
 
        echo "Mail send";
 
    } else {
 
        echo "Mail not send";
    }
	header("Location:enviado.html");
  }  
?>
