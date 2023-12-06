<?php
//get data from form  
$name = $_POST['name'];
$address= $_POST['address'];
$phone = $_POST['phone'];
$email= $_POST['email'];

$to = "info@broken-inn.com";


$txt =" Name : ". $name . "\r\n Email : " . $email . "\r\n Phone : " . $phone ."\r\n Address : ". $address;

$headers = "From: noreply@diamondsguesthouse.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>