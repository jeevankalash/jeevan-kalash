<?php

include "config.php";
require "C:\PHPMailer-5.2.23\PHPMailer-5.2.23\PHPMailerAutoload.php";

$Name= $_POST['name'];
$Email= $_POST['email'];
$Comment= $_POST['comment'];

echo "Thankyou " .$Name . " for reading my poems and commenting.";

$query= "INSERT INTO contactme(Name, Email, Comments) VALUES ('$Name','$Email','$Comment')";

$add_record= mysqli_query($connect, $query);

if($add_record){
	echo "data added";
}
else{
	echo "couldn't add data";
}

$mail = new PHPMailer;

//From email address and name
$mail->From = "from@yourdomain.com";
$mail->FromName = "Full Name";

//To address and name
$mail->addAddress("meghna12091996@gmail.com", "Meghna Sinha");

//Address to which recipient will reply
$mail->addReplyTo("reply@yourdomain.com", "Reply");

//Send HTML or Plain Text email
$mail->isHTML(true);

$mail->Subject = "Subject Text";
$mail->Body = "<i>Mail body in HTML</i>";
$mail->AltBody = "This is the plain text version of the email content";

if(!$mail->send()) 
{
    echo "Mailer Error: " . $mail->ErrorInfo;
} 
else 
{
    echo "Message has been sent successfully";
}
?>