<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['emailaddress'];
$number = $_POST['number'];
$message= $_POST['message'];

$to = "contact@spellsms.com";

$subject = "Mail From SpellSMS";
$txt ="Name = ". $name . "\r\n Email = " . $email . "\r\n Message =" . $message ."\r\n Mobile number =". $number;

$headers = "From: contact@spellsms.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
  header("Location:index.html");
?>
