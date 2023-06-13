<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['email'];
$email= $_POST['subject'];
$message= $_POST['message'];
$to = "thejiteshsinghal@gmail.com";
$subject = "Mail From Ankit Singhal Portfolio";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Subject =" . $subject . "\r\n Message =" . $message;
$headers = "From: noreply@ankitsinghalpotfolio.com" . "\r\n" .
"CC: thejiteshsinghal@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>