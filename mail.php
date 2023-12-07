<?php
//get data from form  
$name = $_POST['name'];
$address= $_POST['address'];
$phone = $_POST['phone'];
$email= $_POST['email'];

$foldingBags = $_POST['foldingBags'];
$fillingBagWithSand = $_POST['fillingBagWithSand'];
$delivery = $_POST['delivery'];

$luminaries= $_POST['luminaries'];

$to = "ashiqulemu.jpi@gmail.com";
//$to = "info@broken-inn.com";

$subject = "ORDER LUMINARIES"; 

$txt =" Name : ". $name . "\r\n Email : " . $email . "\r\n Phone : " . $phone ."\r\n Address : ". $address . "\r\n Help with : " .$foldingBags." $fillingBagWithSand"." $delivery ". "\r\n Luminaries Needed : " . $luminaries;

 $headers = "From: yourCompanyname.com";

if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>